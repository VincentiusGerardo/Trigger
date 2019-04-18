<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_Login extends CI_Model{
        public function __construct(){
            parent::__construct();
        }

        public function login($user,$pass){
            if($this->validatePass($pass)){
                $q = $this->db->get_where('ms_user', array('ID_User' => $user));
                if($q->num_rows() > 0){
                    return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }

        public function validatePass($pass){
            if(password_verify($pass,$this->getStored())){
                return true;
            }else{
                return false;
            }
        }

        public function getStored(){
            $r = $this->input->post('inputID');
            $q = $this->db->get_where('ms_user',array('ID_User' => $r));
            if($q->num_rows() > 0){
                $row = $q->row();
                return $row->Password;
            }else{
                return false;
            }
        }

        public function changePass($user,$pass){
            $q = $this->db->get_where('ms_user',array('ID_User' => $user));
            if($q->num_rows() > 0){
                $row = $q->row();
                if(password_verify($pass,$row->Password)){
                    return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }

        public function updatePass($id,$data){
            $q = $this->db->update('ms_user',$data,array('ID_User' => $id));
            if($q) return true; else return false;
        }
    }