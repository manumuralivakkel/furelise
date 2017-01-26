<?php

                if (!defined('BASEPATH'))
                    exit('No direct script access allowed');

                class Gallery extends Furelise_Controller {

                    public function __construct() {
                        parent::__construct();
                        // Your own constructor code

                        $this->table = "furelise_gallery";
                        $this->primaryKey = "mm_gallery_id";
                        $this->prifix = 'gallery';
                        $this->table_fields = $this->Furelise->tableFeilds($this->table);
                    }

                    public function index() {
                        $this->load->view('layout/dashboard');
                    }
                    
                     public function album_add() {
//                        $this->loginCheck();
                        $this->editor($this->editor_path, $this->editor_width);
                        if ($this->input->post('submit') <> "") {
                            foreach ($this->table_fields as $value) {
                                $data[$value] = $this->input->post($value);
                            }
                            $insert_id = $this->Furelise->insert($this->table, $data);
                            $this->upload->initialize($config);
                            $config['upload_path'] = './assets/uploads/' . $this->prifix . '/';
                            $config['allowed_types'] = 'gif|jpg|png|jpeg';
                            $config['max_size'] = 2 * 1024;
                            $config['max_width'] = '1024';
                            $config['max_height'] = '768';
                            $this->upload->overwrite = TRUE;
                            $new_image_name = $this->prifix . "_" . $insert_id;
                            $config['file_name'] = $new_image_name;
                            $this->upload->initialize($config);
                            $this->load->library('upload', $config);
                            if (!$this->upload->do_upload()) {
                                $this->error = array('error' => $this->upload->display_errors());
//                                print_r($this->error);
//                                die();
                                $this->load->view($this->prifix . '/' . $this->prifix . '_add', $this->error);
//                                $this->load->view('page/page_show'); //code page show
                            } else {
                                $upload_data = $this->upload->data();
//                                print_r($upload_data);
//                                die();
                                $this->Furelise->update($this->table, array($this->primaryKey => $insert_id), array('image' => $upload_data['file_name']));
                            }
                            redirect($this->prifix . '/album_show');
                        }
                       
                        $this->load->view($this->prifix . '/' . 'album_add', $data);
                    }
                    
                    public function album_show($mm_gallery_id = NULL) {
                        
                        $this->data['images'] = $this->Furelise->getAll($this->table,array('parent_id'=>$mm_gallery_id));
        //                        print $this->db->last_query();
                        $this->load->view($this->prifix . '/' .  'album_show', $this->data);
                    }

                }
                