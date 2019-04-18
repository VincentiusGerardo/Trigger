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
        
        public function changePassword(){
            $this->form_validation->set_rules('id','ID User','required|xss_clean|trim');
            $this->form_validation->set_rules('pass','Current Password','required|xss_clean|trim');
            $this->form_validation->set_rules('passN','New Password','required|xss_clean|trim');
            $this->form_validation->set_rules('passR','Repeat Password','required|xss_clean|trim');

            if($this->form_validation->run() == TRUE){
                $id = $this->input->post('id');
                $p = $this->input->post('pass');
                $n = $this->input->post('passN');
                $r = $this->input->post('passR');

                $v = $this->mLogin->changePass($id,$p);
                if($v === true){
                    if($n !== $r){
                        $this->session->set_flashdata('alert', 'error');
                        $this->session->set_flashdata('msg', 'Password Mismatch!');
                        redirect('Admin/Module/');
                    }else if($n === $p){
                        $this->session->set_flashdata('alert', 'error');
                        $this->session->set_flashdata('msg', 'New Password can not be the same as Old Password!');
                        redirect('Admin/Module/');
                    }else{
                        $data = array('Password' => password_hash($n,PASSWORD_DEFAULT));
                        $r = $this->mLogin->updatePass($id,$data);
                        if($r){
                            $this->session->set_flashdata('alert', 'success');
                            $this->session->set_flashdata('msg', 'Password Changed!');
                            redirect('Admin/Module/');
                        }else{
                            $this->session->set_flashdata('alert', 'error');
                            $this->session->set_flashdata('msg', 'Password Not Changed!');
                            redirect('Admin/Module/');
                        }
                    }
                }else{
                    $this->session->set_flashdata('alert', 'error');
                    $this->session->set_flashdata('msg', 'Wrong Password!');
                    redirect('Admin/Module/');
                }
            }else{
                $this->session->set_flashdata('alert', 'error');
                $this->session->set_flashdata('msg', 'Please input all the fields!');
                redirect('Admin/Module/');
            }
        }
    }