<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoices extends CI_Controller {

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

		$this->load->model('model_orders');
	}


	public function index()
	{
		$data['invoices'] = $this->model_orders->all();
		$this->load->view('backend/view_all_invoices',$data);

	}

	public function detail($invoice_id){
		$data['invoices'] = $this->model_orders->get_invoice_by_id($invoice_id);
		$data['orders'] = $this->model_orders->get_orders_by_invoice($invoice_id);
		$this->load->view('backend/view_invoice_detail',$data);

	}

	

	
}
