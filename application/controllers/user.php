<?php

                class User extends Furelise_Controller {

                    public function __construct() {
                        parent::__construct();
                        // Your own constructor code
                        $this->loginflag = FALSE;
                        $this->table = "furelise_user_master";
                        $this->primaryKey = "mm_user_id";
                        $this->table_fields = array('');
                        $this->logindataAdmin = array();
                        $this->load->model('Furelise');
                    }

                    public function index() {
                        $this->load->view('user/index');
                    }

                    public function login() {
                        $username = $this->input->post('mm_user_name');
                        $password = $this->Furelise->hash($this->input->post('mm_user_password'));
                        $result = $this->Furelise->login('furelise_user_master', array('mm_user_name' => $username), array('mm_user_password' => $password));
                        foreach ($result as $val) {
                            $this->logindataAdmin = array(
                                            'fname' => $val->first_name,
                                            'lname' => $val->last_name,
                                            'username' => $val->mm_user_name,
                                            'email' => $val->mm_user_email,
                                            'user_id' => $val->mm_user_id,
                                            'loggedin' => TRUE,
                            );
                        }
                        if ($this->logindataAdmin <> "") {
                            $this->loginflag = TRUE;
                        }
                        $this->session->set_userdata($this->logindataAdmin);
                        $dashboard = 'page/index';
                        $this->Furelise->loggedin() == FALSE || redirect($dashboard);
                        $this->load->view('user/index', $this->data);
                    }

                    public function logout() {
                        $this->Furelise->logout();
                        redirect('user/login');
                    }

                }
                