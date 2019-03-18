<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_API extends CI_Model{
        public function __construct(){
            parent::__construct();
        }

        public function getAbout(){
            $q = $this->db->get_where('ms_about', array('FlagActive' => 'Y'));
            return $q->result();
        }
        
    }