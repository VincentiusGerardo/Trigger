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
            $q ? true : false;
        }

        public function updateAbout($id,$data){
            $cond = array('ID_About' => $id);
            $q = $this->db->update('ms_about', $data,$cond);
            $q ? true : false;
        }

        public function deleteAbout($id){
            $cond = array('ID_About' => $id);
            $q = $this->db->update('ms_about', array('FlagActive' => 'N'),$cond);
            $q ? true : false;
        }

        public function getProduct(){
            $q = $this->db->get_where('ms_product',array('FlagActive' => 'Y'));
            return $q->result();
        }
        
        public function insertProduct($data){
            $q = $this->db->insert('ms_product', $data);
            $q ? true : false;
        }

        public function uploadGambar($id,$data){
            $con = array('ID_Product' => $id);
            $q = $this->db->update('ms_product',$data,$con);
            $q ? true : false;
        }

        public function updateProduct($id, $data){
            $cond = array('ID_Product' => $id);
            $q = $this->db->update('ms_product',$data,$cond);
            $q ? true : false;
        }

        public function deleteProduct($id){
            $cond = array('ID_Product' => $id);
            $q = $this->db->update('ms_product',array('FlagActive' => 'N'),$cond);
            $q ? true : false;
        }

        public function getCategory(){
            $q = $this->db->get_where('ms_category', array('FlagActive' => 'Y'));
            return $q->result();
        }

        public function insertCategory($data){
            $q = $this->db->insert('ms_category',$data);
            $q ? true : false;
        }

        public function updateCategory($id,$data){
            $c = array('ID_Category' => $id);
            $q = $this->db->update('ms_category',$data,$c);
            $q ? true : false;
        }

        public function deleteCategory($id){
            $q = $this->db->update('ms_category',array('FlagActive' => 'N'),array('ID_Category' => $id));
            $q ? true : false;
        }
    }