<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class BackEnd extends CI_Controller{
        public function __construct(){
            parent::__construct();
            if(!$this->session->userdata('is_logged')){
                redirect('Admin/');
            }
        }

        public function getHeader(){
            $data['NamaUser'] = $this->Model_Trigger->getUserName($this->session->userdata('username'));
            $this->load->view('admin/header',$data);
        }

        public function index(){
            $this->getHeader();
            $this->load->view('admin/v_home');
            $this->load->view('admin/footer');
        }

        public function about($h){
            $data['isi'] = $this->Model_Trigger->getAbout($h);
            $this->getHeader();
            $this->load->view('admin/v_about',$data);
            $this->load->view('admin/footer');
        }
        
        public function product(){
            $this->getHeader();
            $this->load->view('admin/footer');
        }
    }