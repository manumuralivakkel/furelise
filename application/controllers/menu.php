<?php

                if (!defined('BASEPATH'))
                    exit('No direct script access allowed');

                class Menu extends Furelise_Controller {

                    public function __construct() {
                        parent::__construct();
                        // Your own constructor code
                        $this->table = "furelise_menu";
                        $this->primaryKey = "menu_id";
                        $this->prifix = 'menu';
                        $this->table_fields = $this->Furelise->tableFeilds($this->table);
                    }

                    public function index() {
                        
                    }

                    public function show_json($menu_id = NULL) {
                        $data['templates'] = $this->Furelise->getAll('furelise_page_templates');
                        $result = (!empty($data['templates'])) ? $data['templates'] : array("status" => "No result found");
                        $this->output
                                            ->set_content_type('application/json')
                                            ->set_output(json_encode($result));
//                        header('Content-type: application/json');
//                        echo json_encode($result);
                    }

                }
                