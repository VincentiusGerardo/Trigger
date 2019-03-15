<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Model_Trigger extends CI_Model{
        public function __construct(){
            parent::__construct();
        }

        public function getUserName($uname){
            $c = array('ID_User' => $uname);
            $query = $this->db->get_where('ms_user',$c);
            if($query->num_rows() == 1){
                $res = $query->row();
                
                return $res->NamaUser;
            }
        }

        public function getAbout($a){
            $cond = array('JudulSEO' => $a);
            $query = $this->db->get_where('ms_about',$cond);
            return $query->result();
        }

        public function insertAbout($data){
            $q = $this->db->insert('ms_about',$data);
            if($q){
                return true;
            }else{
                return false;
            }
        }

        public function updateAbout($id,$data){
            $cond = array('ID_About' => $id);
            $q = $this->db->update('ms_about', $data,$cond);
            if($q){
                return true;
            }else{
                return false;
            }
        }
        
    }