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

        /* About */
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

        /* Product */

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

        public function doUploadGambarProduct(){
            $this->form_validation->set_rules('id', 'ID Product', 'trim|required|xss_clean');
            $this->form_validation->set_rules('nama', 'Nama Product', 'trim|required|xss_clean');
            if(empty($_FILES['gambar']['name'])){
                $this->form_validation->set_rules('gambar', 'Gambar Product', 'trim|required|xss_clean');
            }

            if($this->form_validation->run() == TRUE){
                $idnya = $this->input->post('id');
                $namanya = $this->input->post('nama');
                
                $config['upload_path']          = './media/product/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['overwrite']            = TRUE;
                $config['file_name']            = $namanya;

                $this->load->library('upload', $config);
                if($this->upload->do_upload('gambar')){
                    $data = array(
                        'Gambar' => $this->upload->data('file_name')
                    );

                    $res = $this->mBack->uploadGambarProduct($idnya,$data);
                    $this->session->set_flashdata('alert', 'success');
                    $this->session->set_flashdata('msg', 'Image Uploaded!');
                    redirect('Admin/Module/Product/');  
                }else{
                    $this->session->set_flashdata('alert', 'error');
                    $this->session->set_flashdata('msg', $this->upload->display_errors());
                    redirect('Admin/Module/Product/');    
                }
            }else{
                $this->session->set_flashdata('alert', 'error');
                $this->session->set_flashdata('msg', 'Invalid Image!');
                redirect('Admin/Module/Product/'); 
            }
        }

        public function doUpdateProduct(){
            $this->form_validation->set_rules('idP', 'ID Product', 'trim|required|xss_clean');
            $this->form_validation->set_rules('nProduct', 'Nama Product', 'trim|required|xss_clean');
            $this->form_validation->set_rules('ket', 'Keterangan', 'trim|required|xss_clean');

            if($this->form_validation->run() == TRUE){
                $data = array(
                    'NamaProduct' => $this->input->post('nProduct'),
                    'Keterangan' => $this->input->post('ket')
                );

                $res =  $this->mBack->updateProduct($this->input->post('idP'),$data);

                if($res == true){
                    $this->session->set_flashdata('alert', 'success');
                    $this->session->set_flashdata('msg', 'Data Updated!');
                    redirect('Admin/Module/Product/');
                }else{
                    $this->session->set_flashdata('alert', 'error');
                    $this->session->set_flashdata('msg', 'Data Not Updated!');
                    redirect('Admin/Module/Product/');
                }
            }else{
                $this->session->set_flashdata('alert', 'error');
                $this->session->set_flashdata('msg', 'Data Incomplete!');
                redirect('Admin/Module/Product/');
            }
        }

        public function doDeleteProduct(){
            $this->form_validation->set_rules('idP', 'ID Product', 'trim|required|xss_clean');

            if($this->form_validation->run() == TRUE){
                $res = $this->mBack->deleteProduct($this->input->post('idP'));

                if($res == true){
                    $this->session->set_flashdata('alert', 'success');
                    $this->session->set_flashdata('msg', 'Data Deleted!');
                    redirect('Admin/Module/Product/');
                }else{
                    $this->session->set_flashdata('alert', 'error');
                    $this->session->set_flashdata('msg', 'Data Not Deleted!');
                    redirect('Admin/Module/Product/');
                }
            }else{
                $this->session->set_flashdata('alert', 'error');
                $this->session->set_flashdata('msg', 'Data Incomplete!');
                redirect('Admin/Module/Product/');
            } 
        }

        /* Category */
        public function doInsertCategory(){
            $this->form_validation->set_rules('nCategory', 'Nama Category', 'trim|required|xss_clean');
            
            if($this->form_validation->run() == TRUE){
                $data = array(
                    'NamaCategory' => $this->input->post('nCategory')
                );
                
                $res = $this->mBack->insertCategory($data);
                
                if($res == true){
                    $this->session->set_flashdata('alert', 'success');
                    $this->session->set_flashdata('msg', 'Data Inserted!');
                    redirect('Admin/Module/Category/');  
                }else{
                    $this->session->set_flashdata('alert', 'error');
                    $this->session->set_flashdata('msg', 'Data Not Inserted!');
                    redirect('Admin/Module/Category/');  
                }
            }else{
                $this->session->set_flashdata('alert', 'error');
                $this->session->set_flashdata('msg', 'Invalid Input!');
                redirect('Admin/Module/Category/'); 
            }
        }

        public function doUpdateCategory(){
            $this->form_validation->set_rules('idC', 'ID Category', 'trim|required|xss_clean');
            $this->form_validation->set_rules('nCategory', 'Nama Category', 'trim|required|xss_clean');
            
            if($this->form_validation->run() == TRUE){
                $id = $this->input->post('idC');
                $data = array(
                    'NamaCategory' => $this->input->post('nCategory')
                );
                
                $res = $this->mBack->updateCategory($id,$data);
                
                if($res == true){
                    $this->session->set_flashdata('alert', 'success');
                    $this->session->set_flashdata('msg', 'Data Updated!');
                    redirect('Admin/Module/Category/');  
                }else{
                    $this->session->set_flashdata('alert', 'error');
                    $this->session->set_flashdata('msg', 'Data Not Updated!');
                    redirect('Admin/Module/Category/');  
                }
            }else{
                $this->session->set_flashdata('alert', 'error');
                $this->session->set_flashdata('msg', 'Invalid Input!');
                redirect('Admin/Module/Category/'); 
            }
        }

        public function doDeleteCategory(){
            $this->form_validation->set_rules('idC', 'ID Category', 'trim|required|xss_clean');

            if($this->form_validation->run() == TRUE){
                $id = $this->input->post('idC');
                
                $res = $this->mBack->deleteCategory($id);
                
                if($res == true){
                    $this->session->set_flashdata('alert', 'success');
                    $this->session->set_flashdata('msg', 'Data Deleted!');
                    redirect('Admin/Module/Category/');  
                }else{
                    $this->session->set_flashdata('alert', 'error');
                    $this->session->set_flashdata('msg', 'Data Not Deleted!');
                    redirect('Admin/Module/Category/');  
                }
            }else{
                $this->session->set_flashdata('alert', 'error');
                $this->session->set_flashdata('msg', 'Invalid Input!');
                redirect('Admin/Module/Category/'); 
            }
        }
        
        /* MC */

        public function doInsertMC(){
            $this->form_validation->set_rules('nMC', 'Nama MC', 'trim|required|xss_clean');
            if(empty($_FILES['gambar']['name'])){
                $this->form_validation->set_rules('gambar', 'Gambar Product', 'trim|required|xss_clean');
            }

            if ($this->form_validation->run() == TRUE or FALSE) {
                $nama = $this->input->post('nMC');

                $config['upload_path']          = './media/MC/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['file_name']            = $nama;

                $this->load->library('upload', $config);
                if($this->upload->do_upload('gambar')){
                    $data = array(
                        'NamaMC' => $nama,
                        'Image' => $this->upload->data('file_name')
                    );

                    $res = $this->mBack->insertMC($data);
                    $this->session->set_flashdata('alert', 'success');
                    $this->session->set_flashdata('msg', 'Data Inserted!');
                    redirect('Admin/Module/MC/');  
                }else{
                    $this->session->set_flashdata('alert', 'error');
                    $this->session->set_flashdata('msg', $this->upload->display_errors());
                    redirect('Admin/Module/MC/');    
                }
            } else {
                $this->session->set_flashdata('alert', 'error');
                $this->session->set_flashdata('msg', 'Invalid Data!');
                redirect('Admin/Module/MC/');
            }
        }

        public function doUploadGambarMC(){
            $this->form_validation->set_rules('id', 'ID MC', 'trim|required|xss_clean');
            $this->form_validation->set_rules('nama', 'Nama MC', 'trim|required|xss_clean');
            if(empty($_FILES['gambar']['name'])){
                $this->form_validation->set_rules('gambar', 'Gambar MC', 'trim|required|xss_clean');
            }

            if($this->form_validation->run() == TRUE){
                $idnya = $this->input->post('id');
                $namanya = $this->input->post('nama');
                
                $config['upload_path']          = './media/MC/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['overwrite']            = TRUE;
                $config['file_name']            = $namanya;

                $this->load->library('upload', $config);
                if($this->upload->do_upload('gambar')){
                    $data = array(
                        'Image' => $this->upload->data('file_name')
                    );

                    $res = $this->mBack->uploadGambarMC($idnya,$data);
                    $this->session->set_flashdata('alert', 'success');
                    $this->session->set_flashdata('msg', 'Image Uploaded!');
                    redirect('Admin/Module/MC/');
                }else{
                    $this->session->set_flashdata('alert', 'error');
                    $this->session->set_flashdata('msg', $this->upload->display_errors());
                    redirect('Admin/Module/MC/');  
                }
            }else{
                $this->session->set_flashdata('alert', 'error');
                $this->session->set_flashdata('msg', 'Invalid Image!');
                redirect('Admin/Module/MC/');
            }
        }

        public function doUpdateMC(){
            $this->form_validation->set_rules('id', 'ID MC', 'trim|required|xss_clean');
            $this->form_validation->set_rules('nMC', 'Nama MC', 'trim|required|xss_clean');

            if($this->form_validation->run() == TRUE){
                $res = $this->mBack->updateMC($this->input->post('id'), array('NamaMC' => $this->input->post('nMC')));

                if($res == true){
                    $this->session->set_flashdata('alert', 'success');
                    $this->session->set_flashdata('msg', 'Data Updated!');
                    redirect('Admin/Module/MC/');  
                }else{
                    $this->session->set_flashdata('alert', 'error');
                    $this->session->set_flashdata('msg', 'Data Not Updated!');
                    redirect('Admin/Module/MC/');  
                }
            }else{
                $this->session->set_flashdata('alert', 'error');
                $this->session->set_flashdata('msg', 'Invalid Data!');
                redirect('Admin/Module/MC/');
            }
        }

        public function doDeleteMC(){
            $this->form_validation->set_rules('id', 'ID MC', 'trim|required|xss_clean');
            
            if($this->form_validation->run() == TRUE){
                $res = $this->mBack->deleteMC($this->input->post('id'));

                if($res == true){
                    $this->session->set_flashdata('alert', 'success');
                    $this->session->set_flashdata('msg', 'Data Deleted!');
                    redirect('Admin/Module/MC/');  
                }else{
                    $this->session->set_flashdata('alert', 'error');
                    $this->session->set_flashdata('msg', 'Data Not Deleted!');
                    redirect('Admin/Module/MC/');  
                }
            }else{
                $this->session->set_flashdata('alert', 'error');
                $this->session->set_flashdata('msg', 'Invalid Data!');
                redirect('Admin/Module/MC/');
            }
        }

        /* Paket */
        public function doInsertPaket(){

        }

        public function doUploadGambarPaket(){

        }

        public function doUpdatePaket(){

        }

        public function doDeletePaket(){

        }

        /* Catering */
        public function doInsertCatering(){
            $this->form_validation->set_rules('nVendor', 'Nama Vendor', 'trim|required|xss_clean');
            $this->form_validation->set_rules('menu', 'Isi Menu', 'trim|required|xss_clean');
            $this->form_validation->set_rules('hargas', 'Harga', 'trim|required|xss_clean');
            
            if($this->form_validation->run() == TRUE){
                $data = array(
                    'NamaVendor' => $this->input->post('nVendor'),
                    'Menu' => $this->input->post('menu'),
                    'Harga' => $this->input->post('hargas')
                );

                $res = $this->mBack->insertCatering($data);
                if($res == true){
                    $this->session->set_flashdata('alert', 'success');
                    $this->session->set_flashdata('msg', 'Data Inserted!');
                    redirect('Admin/Module/Catering/');
                }else{
                    $this->session->set_flashdata('alert', 'error');
                    $this->session->set_flashdata('msg', 'Data Not Inserted!');
                    redirect('Admin/Module/Catering/');
                }
            }else{
                $this->session->set_flashdata('alert', 'error');
                $this->session->set_flashdata('msg', 'Invalid Data!');
                redirect('Admin/Module/Catering/');
            }
        }

        public function doUpdateCatering(){
            $this->form_validation->set_rules('id', 'ID Catering', 'trim|required|xss_clean');
            $this->form_validation->set_rules('nVendor', 'Nama Vendor', 'trim|required|xss_clean');
            $this->form_validation->set_rules('menu', 'Isi Menu', 'trim|required|xss_clean');
            $this->form_validation->set_rules('hargas', 'Harga', 'trim|required|xss_clean');

            if($this->form_validation->run() == TRUE){
                $data = array(
                    'NamaVendor' => $this->input->post('nVendor'),
                    'Menu' => $this->input->post('menu'),
                    'Harga' => $this->input->post('hargas')
                );

                $res = $this->mBack->updateCatering($this->input->post('id'),$data);
                if($res == true){
                    $this->session->set_flashdata('alert', 'success');
                    $this->session->set_flashdata('msg', 'Data Updated!');
                    redirect('Admin/Module/Catering/');
                }else{
                    $this->session->set_flashdata('alert', 'error');
                    $this->session->set_flashdata('msg', 'Data Not Updated!');
                    redirect('Admin/Module/Catering/');
                }
            }else{
                $this->session->set_flashdata('alert', 'error');
                $this->session->set_flashdata('msg', 'Invalid Data!');
                redirect('Admin/Module/Catering/');
            }
        }

        public function doDeleteCatering(){
            $this->form_validation->set_rules('id', 'ID Catering', 'trim|required|xss_clean');
            
            if($this->form_validation->run() == TRUE){
                $res = $this->mBack->deleteCatering($this->input->post('id'));
                if($res == true){
                    $this->session->set_flashdata('alert', 'success');
                    $this->session->set_flashdata('msg', 'Data Deleted!');
                    redirect('Admin/Module/Catering/');
                }else{
                    $this->session->set_flashdata('alert', 'error');
                    $this->session->set_flashdata('msg', 'Data Not Deleted!');
                    redirect('Admin/Module/Catering/');
                }
            }else{
                $this->session->set_flashdata('alert', 'error');
                $this->session->set_flashdata('msg', 'Invalid Data!');
                redirect('Admin/Module/Catering/');
            }
        }
    }