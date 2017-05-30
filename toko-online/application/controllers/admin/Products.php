<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		
		if($this->session->userdata('group') != 1){
			$this->session->set_flashdata('error', 'Sorry, you are not logged in!');
			redirect('login');
		}

		$this->load->model('model_products');
	}


	public function index()
	{
		$data['products'] = $this->model_products->all();
		$this->load->view('backend/view_all_products',$data);

	}

	public function create(){
		//form validation sebelum mengeksekusi Query Insert

		$this->load->helper('form'); 
		$this->load->library('form_validation'); 
		$this->load->library('upload'); 

				$this->form_validation->set_rules('name', 'Product Name', 'required');
                $this->form_validation->set_rules('description', 'Product Description', 'required');
                $this->form_validation->set_rules('price', 'Product Price', 'required|integer');
                $this->form_validation->set_rules('stock', 'Available', 'required|integer');
            //	$this->form_validation->set_rules('userfile', 'Product Image');

              	$this->load->library('upload');
                if ($this->form_validation->run() == FALSE){
                	$this->load->view('backend/form_tambah_product');
                }else{
                	// load uploading file library
                	
                	$config['upload_path']          = './uploads/';
                	$config['allowed_types']        = 'jpg|png|gif';
                	$config['max_size']             =  5000; //
                	$config['max_width']            = 2000; //pixels
                	$config['max_height']           = 2000; //pixels

                	$this->upload->initialize($config);
                	
                	 if ( ! $this->upload->do_upload('userfile')){

                	 	//file gagal upload-> kembali ke form tambah
                	 	//$this->load->view('backend/form_tambah_product');
						echo print_r($error = array('error' => $this->upload->display_errors()));

                	}else{
                		//file berhasil upload -> lanjutkan ke query
                		//eksekusi query insert
                		$gambar = $this->upload->data();
                		$data_product = array(
                		'name'			=> set_value('name'),
                		'description'	=> set_value('description'),
                		'price'			=> set_value('price'),
                		'stock'			=> set_value('stock'),
                		'image'			=> $gambar['file_name']
                		);
                		
	                	$this->model_products->create($data_product);
	                	redirect('admin/products');
                	}

           
                	
                }
	

	}

	public function update($id){

		$this->load->helper('form'); 
		$this->load->library('form_validation'); 
		$this->load->library('upload'); 

				$this->form_validation->set_rules('name', 'Product Name', 'required');
                $this->form_validation->set_rules('description', 'Product Description', 'required');
                $this->form_validation->set_rules('price', 'Product Price', 'required|integer');
                $this->form_validation->set_rules('stock', 'Available', 'required|integer');

                $this->load->library('upload');

                if ($this->form_validation->run() == FALSE){
                	$data['product'] = $this->model_products->find($id);       
                	$this->load->view('backend/form_edit_product' , $data);
  				}else{

  					if(empty($_FILES['userfile']['name'] != '')){      	
  						//form submit dengan gambar diisi
  						//form uploading
  						$this->form_validation->set_rules('userfile', 'Product Image', 'required');
	                	$config['upload_path']          = './uploads/';
	                	$config['allowed_types']        = 'jpeg|jpg|png|gif';
	                	$config['max_size']             = 5000; //mb
	                	$config['max_width']            = 2000; //pixels
	                	$config['max_height']           = 2000; //pixels

                		$this->upload->initialize($config);

                		$this->load->library('upload', $config);
                		$this->load->helper('form'); 
						$this->load->library('form_validation'); 
						$this->load->library('upload'); 

						

                	 	if ( ! $this->upload->do_upload('')){
		                	 $data['product'] = $this->model_products->find($id);       
		                	$this->load->view('backend/form_edit_product' , $data);

		                	echo print_r($error = array('error' => $this->upload->display_errors()));
                	 	}else{      


                		  	$gambar = $this->upload->data();
                	 		$data_product = array(
	                		'name'			=> set_value('name'),
	                		'description'	=> set_value('description'),
	                		'price'			=> set_value('price'),
	                		'stock'			=> set_value('stock'),
	                		'image'			=> $gambar['file_name']
	                		);
		                	$this->model_products->update($id, $data_product);
		                	redirect('admin/products');
                		}	

                	}else{
                		//form submit dengan gambar dikosongkan
                			 $gambar = $this->upload->data();
                	 		$data_product = array(
	                		'name'			=> set_value('name'),
	                		'description'	=> set_value('description'),
	                		'price'			=> set_value('price'),
	                		'stock'			=> set_value('stock'),
	                		'image'			=> $gambar['file_name']
	                		);
		                	$this->model_products->update($id, $data_product);
		                	redirect('admin/products');
                	}
                	

                }


		

	}

	public function delete($id){
		$this->model_products->delete($id);
		redirect('admin/products');

	}
}
