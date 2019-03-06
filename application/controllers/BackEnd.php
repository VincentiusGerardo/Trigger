<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class BackEnd extends CI_Controller{
        public function __construct(){
            parent::__construct();
            if(!$this->session->userdata('is_logged')){
                redirect('Admin/');
            }
        }

        public function index(){
            $this->load->view('admin/header');
            $this->load->view('admin/v_home');
            $this->load->view('admin/footer');
        }

        public function aboutus(){
            $this->load->view('admin/header');
            //$this->load->view('admin/v_home');
            $this->load->view('admin/footer');
        }
    }