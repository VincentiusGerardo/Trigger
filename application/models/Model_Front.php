<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Model_Front extends CI_Model{
        public function __construct(){
            parent::__construct();
        }

        public function getAbout($a){
            $cond = array('JudulSEO' => $a);
            $query = $this->db->get_where('ms_about',$cond);
            return $query->result();
        }
        
    }