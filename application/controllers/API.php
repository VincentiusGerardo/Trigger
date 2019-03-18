<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class API extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('M_API','mAPI');
            header('Content-Type: application/json');
        }

        public function getAbout(){
            $data['isi'] = $this->mAPI->getAbout();
            print_r(json_encode($data));
        }

        public function getPaket(){

        }

        public function getMC(){

        }

        public function getMakanan(){
            
        }
    }