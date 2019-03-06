<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class FrontEnd extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('Model_Front');
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

        public function about(){
            $this->load->view('front/header');
            //$this->load->view('front/v_contact');
            $this->load->view('front/footer');
        }
    }