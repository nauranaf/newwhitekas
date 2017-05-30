<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    
    public function __construct(){
		parent::__construct();
		$this->load->model('Model_users');
	}

	public function index(){
	    $this->load->view('form_register');
	}



    public function create() {
		$data = array(
		    'username' => $this->input->post('username'),
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'address' => $this->input->post('address'),
			'password' => $this->input->post('password'),
			'group' => '2',
			); 
 
 		 $this->Model_users->addData($data);
 		 echo "<script>alert('Selamat, Anda sudah terdaftar menjadi Member.')</script>";
 		 $this->index();
 		 
	}
		
	


}

	