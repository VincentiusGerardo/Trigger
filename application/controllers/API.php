<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class API extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('M_Back','mAPI');
            header('Content-Type: application/json');
        }

        public function getAbout(){
            $data['isi'] = $this->mAPI->getAbout();
            print_r(json_encode($data));
        }

        public function getPaket(){
            $data['paket'] = $this->mAPI->getPackage();
            print_r(json_encode($data));
        }

        public function getMC(){
            $data['MC'] = $this->mAPI->getMC();
            print_r(json_encode($data));
        }

        public function getCatering(){
            $data['catering'] = $this->mAPI->getCatering();
            print_r(json_encode($data));
        }
    }