<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Front extends CI_Controller{
        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->load->view('header');
            // $this->load->view('home');
            $this->load->view('footer');
        }

        public function products($p = null){

        }

        public function about(){

        }

        public function contact(){

        }
    }