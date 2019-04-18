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
            $this->load->view('admin/modals/m_about',$data);
            $this->load->view('admin/footer');
        }
        
        public function product(){
            $data['pro'] = $this->mBack->getProduct();
            $this->getHeader();
            $this->load->view('admin/v_product',$data);
            $this->load->view('admin/modals/m_product',$data);
            $this->load->view('admin/footer');
        }

        public function category(){
            $data['cat'] = $this->mBack->getCategory();
            $this->getHeader();
            $this->load->view('admin/v_category', $data);
            $this->load->view('admin/modals/m_category', $data);
            $this->load->view('admin/footer');
        }

        public function package(){
            $data['pack'] = $this->mBack->getPackage();
            $data['cat'] = $this->mBack->getCatering();
            $this->getHeader();
            $this->load->view('admin/v_package',$data);
            $this->load->view('admin/modals/m_package',$data);
            $this->load->view('admin/footer');
        }

        public function MC(){
            $data['mc'] = $this->mBack->getMC();
            $this->getHeader();
            $this->load->view('admin/v_mc',$data);
            $this->load->view('admin/modals/m_mc',$data);
            $this->load->view('admin/footer');
        }

        public function catering(){
            $data['cat'] = $this->mBack->getCatering();
            $this->getHeader();
            $this->load->view('admin/v_catering',$data);
            $this->load->view('admin/modals/m_catering',$data);
            $this->load->view('admin/footer');
        }

        public function transaction(){
            $this->getHeader();
            $this->load->view('admin/v_transaction');
            $this->load->view('admin/footer');
        }

        public function getTransactions(){
            
        }

        public function TransactionHistory(){
            $this->getHeader();
            // $this->load->view('admin/v_transaction');
            $this->load->view('admin/footer');
        }
        
    }