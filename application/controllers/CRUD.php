<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class CRUD extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('M_Back','mBack');
            if(!$this->session->userdata('is_logged')){
                redirect('Admin/');
            }
        }

        public function doInsertAbout(){
            $this->form_validation->set_rules('jdl', 'Judul Menu', 'trim|required|xss_clean');
            $this->form_validation->set_rules('isi', 'Keterangan', 'trim|required|xss_clean');
            
            if($this->form_validation->run() == TRUE){
                $judul = $this->input->post('jdl');
                $ket = $this->input->post('isi');

                $data = array(
                    'Judul' => $judul,
                    'JudulSEO' => str_replace(" ","",$judul),
                    'Keterangan' => $ket
                );

                $res = $this->mBack->insertAbout($data);

                if($res == true){
                    $this->session->set_flashdata('alert', 'success');
                    $this->session->set_flashdata('msg', 'Data Inserted!');
                    redirect('Admin/Module/About/');    
                }else{
                    $this->session->set_flashdata('alert', 'error');
                    $this->session->set_flashdata('msg', 'Data Not Inserted!');
                    redirect('Admin/Module/About/');
                }
            }else{
                $this->session->set_flashdata('alert', 'error');
                $this->session->set_flashdata('msg', 'Please input all the fields!');
                redirect('Admin/Module/About/');
            }
        }

        public function doUpdateAbout(){
            $this->form_validation->set_rules('ID_A', 'ID', 'trim|required|xss_clean');
            $this->form_validation->set_rules('isiA', 'Keterangan', 'trim|required|xss_clean');

            
            if($this->form_validation->run() == TRUE){
                $id = $this->input->post('ID_A');
                $isi = $this->input->post('isiA');
                $data = array('Keterangan' => $isi);
                $res = $this->mBack->updateAbout($id,$data);

                if($res == true){
                    $this->session->set_flashdata('alert', 'success');
                    $this->session->set_flashdata('msg', 'Data Updated!');
                    redirect('Admin/Module/About/');   
                }else{
                    $this->session->set_flashdata('alert', 'success');
                    $this->session->set_flashdata('msg', 'Data Not Deleted!');
                    redirect('Admin/Module/About/');   
                }
            }else{
                $this->session->set_flashdata('alert', 'error');
                $this->session->set_flashdata('msg', 'Please input all the fields!');
                redirect('Admin/Module/About/');
            }
        }

        public function doDeleteAbout(){
            $this->form_validation->set_rules('idAbout', 'ID About', 'trim|required|xss_clean');
            if($this->form_validation->run() == TRUE){
                $id = $this->input->post('idAbout');

                $res = $this->mBack->deleteAbout($id);

                if($res == true){
                    $this->session->set_flashdata('alert', 'success');
                    $this->session->set_flashdata('msg', 'Data Deleted!');
                    redirect('Admin/Module/About/');    
                }else{
                    $this->session->set_flashdata('alert', 'error');
                    $this->session->set_flashdata('msg', 'Data Not Deleted!');
                    redirect('Admin/Module/About/');
                }
            }else{
                $this->session->set_flashdata('alert', 'error');
                $this->session->set_flashdata('msg', 'Please input all the fields!');
                redirect('Admin/Module/About/');
            }
        }

        public function doInsertProduct(){
            $this->form_validation->set_rules('nProduct', 'Nama Product', 'trim|required|xss_clean');
            $this->form_validation->set_rules('ket', 'Keterangan', 'trim|required|xss_clean');
            if(empty($_FILES['gambar']['name'])){
                $this->form_validation->set_rules('gambar', 'Gambar Product', 'trim|required|xss_clean');
            }

            
            if($this->form_validation->run() == TRUE){
                $nama = $this->input->post('nProduct');
                $isi = $this->input->post('ket');
                
                $config['upload_path']          = './media/product/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['file_name']            = $nama;

                $this->load->library('upload', $config);
                if($this->upload->do_upload('gambar')){
                    $data = array(
                        'NamaProduct' => $nama,
                        'Keterangan' => $isi,
                        'Gambar' => $this->upload->data('file_name')
                    );

                    $res = $this->mBack->insertProduct($data);
                    $this->session->set_flashdata('alert', 'success');
                    $this->session->set_flashdata('msg', 'Data Inserted!');
                    redirect('Admin/Module/Product/');  
                }else{
                    $this->session->set_flashdata('alert', 'error');
                    $this->session->set_flashdata('msg', $this->upload->display_errors());
                    redirect('Admin/Module/Product/');    
                }
            }else{
                $this->session->set_flashdata('alert', 'error');
                $this->session->set_flashdata('msg', 'Data Incomplete!');
                redirect('Admin/Module/Product/');    
            }
            
        }
    }