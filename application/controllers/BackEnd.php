<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class BackEnd extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('M_Back', 'mBack');
            if(!$this->session->userdata('is_logged')){
                redirect('Admin/');
            }
        }

        public function getHeader(){
            $data['NamaUser'] = $this->mBack->getUserName($this->session->userdata('username'));
            $this->load->view('admin/header',$data);
        }

        public function index(){
            $this->getHeader();
            $this->load->view('admin/v_home');
            $this->load->view('admin/footer');
        }

        public function about(){
            $data['isi'] = $this->mBack->getAbout();
            $this->getHeader();
            $this->load->view('admin/v_about',$data);
            $this->load->view('admin/footer');
        }
        
        public function product(){
            $data['pro'] = $this->mBack->getProduct();
            $this->getHeader();
            $this->load->view('admin/v_product',$data);
            $this->load->view('admin/footer');
        }

        
    }