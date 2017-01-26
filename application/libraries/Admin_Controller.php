<?php

                class Furelise_Controller extends MY_Controller {

                    function __construct() {
                        parent::__construct();
                        $this->data['meta_title'] = 'CMS';
                        $this->load->model('Furelise');
                        $this->load->library('upload');
                        $this->load->library('input');
                        $this->editor_path = '/furelise/assets/js/ckfinder';
                        $this->editor_width = '770px';
                        
                        // Login check start
                        $exception_uris = array(
                                        'user/login',
                                        'user/logout'
                        );
                        if (in_array(uri_string(), $exception_uris) == FALSE) {
                            if ($this->Furelise->loggedin() == FALSE) {
                                redirect('user/login');
                            }
                        }
                        // Login check end
                    }

                    
                    
                    
                    function loginCheck() {
                        if ($this->Furelise->loggedin() == FALSE) {
                            redirect('user/login');
                        }
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

                    
                    
                    
                    
                    public function SelectMenu() {
                        $parent_menu_id = NULL;
                        $data['options'] = $this->Furelise->getAll('furelise_menu', array('parent_id' => 0));
                        foreach ($data['options'] as $key => $val) {
                            $menu_id = $val->menu_id;
                            $data['results'][$key] = $this->Furelise->getAll('furelise_menu', array('parent_id' => $menu_id));
                        }
                        foreach ($data['results'] as $key => $val) {
                            foreach ($val as $key => $val) {
                                $parent_menu_id = $val->menu_id;
                                $data['submenu'][$key] = $this->Furelise->getAll('furelise_menu', array('parent_id' => $parent_menu_id));
                            }
                        }
                        return $data;
                    }

                    
                    
                    
                    
                    public function Status($statid = NULL, $status = NULL, $redirect_url = NULL, $pageNo = NULL) {
                        $redirect = explode("_", $redirect_url);
                        $status = ($status == '1') ? '0' : '1';
                        $this->Furelise->update($this->table, array($this->primaryKey => $statid), array('status' => $status));
                        if ($status == 0) {
                            $this->session->set_flashdata('status_message', 'Item has been unpublished successfully.');
                        } else {
                            $this->session->set_flashdata('status_message', 'Item has been published successfully.');
                        }
                        redirect(base_url($redirect[0] . '/' . $redirect[1] . '/' . $pageNo));
                    }

                    
                    
                    
                    
                    public function priority() {
                        $redirect = $this->input->post(redirecturl);
                        if ($this->input->post('submit') <> "") {
                            $priority = $this->input->post(priority);
                            $uid = $this->input->post(uid);
                            $count = count($this->input->post(priority));
                            for ($i = 0; $i < $count; $i++) {
                                $ErrMsg = $this->Furelise->update($this->table, array($this->primaryKey => $uid[$i]), array('priority ' => $priority[$i]));
                            }
                        }
                        $this->session->set_flashdata('status_message', 'Priority set successfully.');
                        redirect(base_url($redirect));
                    }

                    
                    
                    
                    
                    public function add() {
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
                            redirect($this->prifix . '/show');
                        }
                        $data = $this->SelectMenu();
                        $data['templates'] = $this->Furelise->getAll('furelise_page_templates');
                        $this->load->view($this->prifix . '/' . $this->prifix . '_add', $data);
                    }

                    
                    
                    
                    public function edit($mm_page_id = NULL, $pageNo = NULL) {
                        $this->editor($this->editor_path, $this->editor_width);
                        if ($this->input->post('submit') <> "") {
                            foreach ($this->table_fields as $value) {
                                $data[$value] = $this->input->post($value);
                            }
                            $insert_id = $this->Furelise->update($this->table, array($this->primaryKey => $data[$this->primaryKey]), $data);
                            $pageNo = $this->input->post('pageNo');
                            $this->upload->initialize($config);
                            $config['upload_path'] = './assets/uploads/' . $this->prifix . '/';
                            $config['allowed_types'] = 'gif|jpg|png|jpeg';
                            $config['max_size'] = '1000';
                            $config['max_width'] = '1024';
                            $config['max_height'] = '768';
                            $new_image_name = $this->prifix . "_" . $data[$this->primaryKey];
                            $config['file_name'] = $new_image_name;
                            $this->upload->initialize($config);
                            $this->load->library('upload', $config);
                            $this->upload->overwrite = TRUE;
                            if (!$this->upload->do_upload()) {
                                $this->error = array('error' => $this->upload->display_errors());
                                $this->load->view($this->prifix . '/' . $this->prifix . '_edit', $this->error);
                            } else {
                                $mm_page_id = $data[$this->primaryKey];
                                $upload_data = $this->upload->data();
                                $this->Furelise->update($this->table, array($this->primaryKey => $mm_page_id), array('image' => $upload_data['file_name']));
                            }
                            $this->session->set_flashdata('status_message', 'Data updated successfully.');
                            $url = base_url($this->prifix . '/show/' . $pageNo);
                            redirect(base_url($this->prifix . '/show/' . $pageNo));
                        }
                        $data = $this->SelectMenu();
                        $data['templates'] = $this->Furelise->getAll('furelise_page_templates');
                        $data['pageNo'] = $pageNo;
                        $data[$this->prifix .'data'] = $this->Furelise->getRow($this->table, array($this->primaryKey => $mm_page_id));
                        $this->load->view($this->prifix . '/' . $this->prifix . '_edit', $data);
                    }

                    
                    
                    
                    public function show($pageNo = NULL) {
                        $count = $this->db->count_all_results($this->table);
                        $config = array();
                        $perpage = 5;
                        if ($count > $perpage) {
                            $this->load->library('pagination');
                            $config['base_url'] = base_url() . $this->prifix . "/show/";
                            $config['total_rows'] = $count;
                            $config['per_page'] = $perpage;
                            $config['uri_segment'] = 3;
                            $config['use_page_numbers'] = TRUE;
                            $this->pagination->initialize($config);
                            $this->data['pagination'] = $this->pagination->create_links();
                            $pageNo = ($pageNo <> "" && $pageNo <> 0) ? $pageNo : 1;
                        } else {
                            $this->data['pagination'] = '';
                            $config['per_page'] = $this->db->count_all_results($this->table);
                            $pageNo = ($pageNo <> "" && $pageNo <> 0) ? $pageNo : 1;
                        }
                        $offset = ($pageNo - 1) * $perpage;
                        $this->db->limit($perpage, $offset);
                        
                        $this->data['articles'] = $this->Furelise->getLimit($this->table, $config["per_page"], "", $this->primaryKey);
                        $this->data['menu'] = $this->SelectMenu();
//                        print $this->db->last_query();
                        $this->load->view($this->prifix . '/' . $this->prifix . '_show', $this->data);
                    }

                }
                