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
        
        /* About */
        public function getAbout(){
            $q = $this->db->get_where('ms_about', array('FlagActive' => 'Y'));
            return $q->result();
        }

        public function insertAbout($data){
            $q = $this->db->insert('ms_about',$data);
            if($q) return true; else return false;
        }

        public function updateAbout($id,$data){
            $cond = array('ID_About' => $id);
            $q = $this->db->update('ms_about', $data,$cond);
            if($q) return true; else return false;
        }

        public function deleteAbout($id){
            $cond = array('ID_About' => $id);
            $q = $this->db->update('ms_about', array('FlagActive' => 'N'),$cond);
            if($q) return true; else return false;
        }
        
        /* Product */
        public function getProduct(){
            $q = $this->db->get_where('ms_product',array('FlagActive' => 'Y'));
            return $q->result();
        }
        
        public function insertProduct($data){
            $q = $this->db->insert('ms_product', $data);
            if($q) return true; else return false;
        }

        public function uploadGambarProduct($id,$data){
            $con = array('ID_Product' => $id);
            $q = $this->db->update('ms_product',$data,$con);
            if($q) return true; else return false;
        }

        public function updateProduct($id, $data){
            $cond = array('ID_Product' => $id);
            $q = $this->db->update('ms_product',$data,$cond);
            if($q) return true; else return false;
        }

        public function deleteProduct($id){
            $cond = array('ID_Product' => $id);
            $q = $this->db->update('ms_product',array('FlagActive' => 'N'),$cond);
            if($q) return true; else return false;
        }

        /* Category */
        public function getCategory(){
            $q = $this->db->get_where('ms_category', array('FlagActive' => 'Y'));
            return $q->result();
        }

        public function insertCategory($data){
            $q = $this->db->insert('ms_category',$data);
            if($q) return true; else return false;
        }

        public function updateCategory($id,$data){
            $c = array('ID_Category' => $id);
            $q = $this->db->update('ms_category',$data,$c);
            if($q) return true; else return false;
        }

        public function deleteCategory($id){
            $q = $this->db->update('ms_category',array('FlagActive' => 'N'),array('ID_Category' => $id));
            if($q) return true; else return false;
        }

        /* MC */
        public function getMC(){
            $q = $this->db->get_where('ms_mc', array('FlagActive' => 'Y'));
            return $q->result();
        }

        public function insertMC($data){
            $q = $this->db->insert('ms_mc',$data);
            if($q) return true; else return false;
        }

        public function updateMC($id,$data){
            $c = array('ID_MC' => $id);
            $q = $this->db->update('ms_mc',$data,$c);
            if($q) return true; else return false;
        }

        public function uploadGambarMC($id,$data){
            $q = $this->db->update('ms_mc',$data, array('ID_MC' => $id));
            if($q) return true; else return false;
        }

        public function deleteMC($id){
            $q = $this->db->update('ms_mc', array('FlagActive' => 'N'), array('ID_MC' => $id));
            if($q) return true; else return false;
        }
        
        /* Paket */
        public function getPackage(){
            $q = $this->db->query("SELECT a.ID_Paket,a.NamaPaket, b.NamaMC, c.NamaVendor, a.NamaTempat, a.Alamat,a.Image,a.Biaya FROM ms_paket a, ms_mc b, ms_catering c WHERE a.ID_MC = b.ID_MC and a.ID_Catering = c.ID_Catering and a.FlagActive = 'Y'");
            return $q->result();
        }

        public function insertPackage($data){
            $q = $this->db->insert('ms_paket',$data);
            if($q) return true; else return false;
        }

        public function updatePackage($id,$data){
            $c = array('ID_Paket' => $id);
            $q = $this->db->update('ms_paket',$data,$c);
            if($q) return true; else return false;
        }

        public function deletePackage($id){
            $q = $this->db->update('ms_paket', array('FlagActive' => 'N'), array('ID_Paket' => $id));
            if($q) return true; else return false;
        }

        /* Catering */
        public function getCatering(){
            $q = $this->db->get_where('ms_catering', array('FlagActive' => 'Y'));
            return $q->result();
        }

        public function insertCatering($data){
            $q = $this->db->insert('ms_catering',$data);
            if($q) return true; else return false;
        }

        public function updateCatering($id,$data){
            $c = array('ID_Catering' => $id);
            $q = $this->db->update('ms_catering',$data,$c);
            if($q) return true; else return false;
        }

        public function deleteCatering($id){
            $q = $this->db->update('ms_catering', array('FlagActive' => 'N'), array('ID_Catering' => $id));
            if($q) return true; else return false;
        }
    }