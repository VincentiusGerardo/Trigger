<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_Back extends CI_Model{
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

        public function getAbout(){
            $q = $this->db->get_where('ms_about', array('FlagActive' => 'Y'));
            return $q->result();
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

        public function deleteAbout($id){
            $cond = array('ID_About' => $id);
            $q = $this->db->update('ms_about', array('FlagActive' => 'N'),$cond);
            if($q){
                return true;
            }else{
                return false;
            }
        }

        public function getProduct(){

        }
        
        public function insertProduct(){

        }

        public function updateProduct(){

        }

        public function deleteProduct(){

        }
    }