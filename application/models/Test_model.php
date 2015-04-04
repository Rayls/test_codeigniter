<?php
class News_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_stuff()
        {
                $query = $this->db->get('test');
                return $query->result_array();
        }
}