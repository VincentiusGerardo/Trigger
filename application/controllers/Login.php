<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Login extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('M_Login', 'mLogin');
        }

        public function index(){
            if(!$this->session->userdata('is_logged')){
                $this->load->view('v_login');
            }else{
                redirect('Admin/Module/','refresh');
            }
        }

        public function doLogin(){
            $this->form_validation->set_rules('inputID','Username','required|xss_clean|trim');
            $this->form_validation->set_rules('inputPassword','Password','required|xss_clean|trim');

            if($this->form_validation->run() == TRUE){
                $uname = $this->input->post('inputID');
                $pass = $this->input->post('inputPassword');
                $r = $this->mLogin->login($uname,$pass);

                if($r){
                    $data = array(
                        'is_logged' => TRUE,
                        'username' => $uname
                    );
                    $this->session->set_userdata($data);
                    redirect('Admin/Module/','refresh');
                }else{
                    redirect('Admin/','refresh');
                }
            }else{
                redirect('Admin/','refresh');
            }
        }

        public function doLogout(){
            $this->session->sess_destroy();
            redirect('Admin/','refresh');
        }
    }