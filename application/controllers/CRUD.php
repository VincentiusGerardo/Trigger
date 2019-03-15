<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class CRUD extends CI_Controller{
        public function __construct(){
            parent::__construct();
            if(!$this->session->userdata('is_logged')){
                redirect('Admin/');
            }
        }

        public function doInsertAbout(){
            $this->form_validation->set_rules('fieldname', 'fieldlabel', 'trim|required|min_length[5]|max_length[12]');
            
            if($this->form_validation->run() == TRUE){
                
            }else{
                $this->session->set_flashdata('name', 'value');
                $this->session->set_flashdata('name', 'value');
                redirect('Admin/About/','refresh');
            }
        }
    }