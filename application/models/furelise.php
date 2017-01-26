<?php

//Written by: Manu Murali
//Date:30-4-2015
                class Furelise extends CI_Model {

                    function __construct() {
                        // Call the Model constructor
                        parent::__construct();
                    }

                    function tableFeilds($table = NULL) {

                        $table_fields = $this->db->list_fields($table);
                        return $table_fields;
                    }

                    function insert($table = NULL, $values = NULL, $where = NULL, $orderby = NULL) {
                        $this->db->insert($table, $values);
                        return $this->db->insert_id();
                    }

                    function update($table = NULL, $where = NULL, $values = NULL, $orderby = NULL) {
                        if ($orderby != '')
                            $this->db->order_by($orderby);
                        if ($where != '')
                            $this->db->where($where);
                        $this->db->update($table, $values);
                        return $this->db->affected_rows();
                    }

                    function delete($table = NULL, $where = NULL, $orderby = NULL) {
                        $this->db->where($where);
                        $query = $this->db->delete($table);
                        //$this->db->delete($tables);
                    }

                    function getAll($table = NULL, $where = NULL, $orderby = NULL) {
                        if ($orderby != '')
                            $this->db->order_by($orderby);
                        if ($where != '')
                            $this->db->where($where);
                        $query = $this->db->get($table);
                        return $query->result();
                    }

                    function getRow($table = NULL, $where = NULL, $orderby = NULL) {
                        if ($orderby != '')
                            $this->db->order_by($orderby);
                        if ($where != '')
                            $this->db->where($where);
                        $query = $this->db->get($table);
                        return $query->result();
                    }

                    function getColumn($table = NULL, $column = NULL, $where = NULL, $orderby = NULL) {

                        if ($orderby != '')
                            $this->db->order_by($orderby);
                        $this->db->select($column);
                        if ($where != '')
                            $this->db->where($where);
                        $query = $this->db->get($table);
                        //$query=$this->db->query('SELECT '.$column.' FROM '.$table.' WHERE '.$where);
                        return $query->result();
                    }

                    function getField($table = NULL, $column = NULL, $where = NULL, $orderby = NULL) {
                        if ($orderby != '')
                            $this->db->order_by($orderby);
                        $this->db->select($column);
                        if ($where != '')
                            $this->db->where($where);
                        $query = $this->db->get($table);
                        //$query=$this->db->query('SELECT '.$column.' FROM '.$table.' WHERE '.$where);
                        return $query->result();
                    }

                    function getDistinct($table = NULL, $column = NULL, $where = NULL, $orderby = NULL) {
                        $this->db->distinct();
                        if ($column != '')
                            $this->db->select($column);
                        if ($where != '')
                            $this->db->where($where);
                        $query = $this->db->get($table);
                        //$query=$this->db->query('SELECT DISTINCT '.$column.' FROM '.$table);
                        return $query->result();
                    }

                    function getSearch($table = NULL, $feilds = NULL, $string = NULL, $orderby = NULL) {
                        //print_r($feilds);
                        $key = 1;
                        foreach ($feilds as $values) {
                            //echo $values;
                            if ($key == 1) {
                                $this->db->like($values, $string);
                            }
                            if ($key <> 1) {
                                $this->db->or_like($values, $string);
                            }
                            $key = $key + 1;
                        }
                        $query = $this->db->get($table);
                        return $query->result();
                        //$this->db->like('title', 'match');
                        //$this->db->or_like('body', $match);
                        //$query=$this->db->query("SELECT * FROM ".$table." WHERE ".$column." LIKE '%".$string."%'");
                    }

                    // Fetch data according to per_page limit.
                    function getLimit($table = NULL, $limit = NULL, $where = NULL, $orderby = NULL) {
                        if ($orderby != '')
                            $this->db->order_by($orderby);
                        $this->db->limit($limit);
                        if ($where != '')
                            $this->db->where($where);
                        $query = $this->db->get($table);
//                       print $this->db->last_query();
//                        die();
                        if ($query->num_rows() > 0) {
                            foreach ($query->result() as $row) {
                                $data[] = $row;
                            }
                            return $data;
                        }
                        return false;
                    }

                    function login($table = NULL, $username = NULL, $password = NULL) {
                        $this->db->where($username);
                        $this->db->where($password);
                        $user = $this->db->get($table);
                        if ($user <> "")
                            return $user->result();
                        else
                            return FALSE;
                    }

                    function logout() {
                        $this->session->sess_destroy();
                    }

                    function loggedin() {
                        return (bool) $this->session->userdata('loggedin');
                    }

                    function hash($string) {
                        return hash('sha512', $string . config_item('encryption_key'));
                    }

                }
                