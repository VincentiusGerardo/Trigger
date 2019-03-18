<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class FrontEnd extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('M_Trigger','mTrigger');            
        }

        public function index(){
            $this->load->view('front/header');
            $this->load->view('front/v_index');
            $this->load->view('front/footer');
        }

        public function contact(){
            $this->load->view('front/header');
            $this->load->view('front/v_contact');
            $this->load->view('front/footer');
        }

        public function gallery(){
            $this->load->view('front/header');
            $this->load->view('front/v_gallery');
            $this->load->view('front/footer');
        }

        public function about($page){
            $data['judul'] = $this->mTrigger->getAbout($page);
            $this->load->view('front/header');
            $this->load->view('front/v_about',$data);
            $this->load->view('front/footer');
        }

        public function product(){
            $this->load->view('front/header');
            $this->load->view('front/v_product');
            $this->load->view('front/footer');
        }

        public function detail($hal){
            $this->load->view('front/header');
            $this->load->view('front/v_detail');
            $this->load->view('front/footer');
        }
    }