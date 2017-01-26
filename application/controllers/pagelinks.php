<?php

                if (!defined('BASEPATH'))
                    exit('No direct script access allowed');

                class Page extends Furelise_Controller {

                    public function __construct() {
                        parent::__construct();
                        // Your own constructor code
                        $this->table = "furelise_pages";
                        $this->primaryKey = "mm_page_id";
                        $this->table_fields = array('mm_page_text', 'mm_page_text_arabic', 'mm_page_title', 'mm_page_title_arabic', 'mm_page_content', 'mm_page_content_arabic', 'mm_page_title_arabic', 'mm_page_url', 'image', 'map', 'mm_page_status');
                        $this->load->model('Furelise');
                        $this->load->library('upload');
                    }

                    public function index() {
                        $this->load->view('admin/dashboard');
                    }

                    public function edit() {

                        $this->load->view('layout/header');
                        $this->load->view('user/index');
                        $this->load->view('layout/footer');
                        if ($mm_page_id <> "") {
                            //$this->input->post(NULL,TRUE);

                            foreach ($this->table_fields as $values) {
                                $data[$values] = $this->input->post($values);
                            }

                            //print_r($data);
                            $this->Furelise->update($this->table, array($this->primaryKey => '6'), $data);
                        }
                    }

                    public function add() {


                        // editor portion start

                        $path = '/furelise/assets/js/ckfinder';
                        $width = '500px';
                        $this->editor($path, $width);

                        // editor portion end
                        //$this->form_validation->set_rules('mm_page_text', 'Menu Title', 'required');

                        if ($this->input->post('submit') <> "") {

                            foreach ($this->table_fields as $value) {
                                $data[$value] = $this->input->post($value);
                            }


                            $insert_id = $this->Furelise->insert($this->table, $data);

                            // Alternately you can set preferences by calling the initialize function. Useful if you auto-load the class:
                            //$this->upload->initialize($config);

                            $config['upload_path'] = './assets/uploads/';
                            $config['allowed_types'] = 'gif|jpg|png';
                            $config['max_size'] = '1000';
                            $config['max_width'] = '1024';
                            $config['max_height'] = '768';
                            $this->upload->initialize($config);
                            $this->load->library('upload', $config);

                            if (!$this->upload->do_upload()) {
                                $this->error = array('error' => $this->upload->display_errors());

                                $this->load->view('layout/pageadd', $this->error);
                            } else {
                                $upload_data = array('upload_data' => $this->upload->data());

                                $this->Furelise->update("furelise_pages", array('image' => $upload_data['file_name']));
                            }

                            //redirect('admin/page/display');
                        }
                        $this->load->view('pages/page_add');
                    }

                    public function display() {

                        $count = $this->db->count_all_results('furelise_pages');

                        // Set up pagination
                        $perpage = 4;
                        if ($count > $perpage) {
                            $this->load->library('pagination');
                            $config['base_url'] = base_url() . "page/display/";
                            $config['total_rows'] = $count;
                            $config['per_page'] = $perpage;
                            $config['uri_segment'] = 4;
                            $this->pagination->initialize($config);
                            $this->data['pagination'] = $this->pagination->create_links();
                            $offset = $this->uri->segment(4);
                        } else {
                            $this->data['pagination'] = '';
                            $offset = 0;
                        }


                        // Fetch articles

                        $this->db->limit($perpage, $offset);
                        $this->data['articles'] = $this->Furelise->getAll("furelise_pages");
                        $this->load->view('pages/page_list', $this->data);
                    }

                    function editor($path, $width) {
                        //Loading Library For Ckeditor
                        $this->load->library('ckeditor');
                        $this->load->library('ckFinder');
                        //configure base path of ckeditor folder
                        $this->ckeditor->basePath = base_url() . '/assets/js/ckeditor/';
                        $this->ckeditor->config['toolbar'] = 'Full';
                        $this->ckeditor->config['language'] = 'en';
                        $this->ckeditor->config['width'] = $width;
                        //configure ckfinder with ckeditor config
                        $this->ckfinder->SetupCKEditor($this->ckeditor, $path);
                    }

                }
                