<?php

                if (!defined('BASEPATH'))
                    exit('No direct script access allowed');

                class Page extends Furelise_Controller {

                    public function __construct() {
                        parent::__construct();
                        // Your own constructor code

                        $this->table = "furelise_page";
                        $this->primaryKey = "mm_page_id";
                        $this->prifix = 'page';
                        $this->table_fields = $this->Furelise->tableFeilds($this->table);
                    }

                    public function index() {
                        $this->load->view('layout/dashboard');
                    }

                }
                