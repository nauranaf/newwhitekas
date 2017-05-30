<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

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
		$this->load->model('model_customer');

	}

	public function index()	{
		
	}

	public function payment_confirmation($invoice_id = 0){


		$this->form_validation->set_rules('invoice_id','Invoice ID','required|integer');
		$this->form_validation->set_rules('amount','Amount  Transferred','required|integer');
		if($this->form_validation->run() == FALSE){
			if($this->input->post('invoice_id')){
				$data['invoice_id'] = set_value('invoice_id');
			}else{
				$data['invoice_id'] = $invoice_id;
			}
			$this->load->view('customer/form_payment_confirmation', $data);
		}else{
			//proceed to mark the record 
			$isValid = $this->model_customer->mark_invoice_confirmed(set_value('invoice_id'), set_value('amount'));

			if($isValid){
			$this->session->set_flashdata('message','Mohon menunggu, kami akan mengecek konfirmasi pembayaran anda. Terimakasih');
			}else{
				$this->session->set_flashdata('error','Salah ID atau jumlah');
				redirect('customer/payment_confirmation/'.set_value('invoice_id'));
			}
			redirect('customer/shopping_history');
		
		}
	}

	public function shopping_history(){
		$user = $this->session->userdata('username');
		$data['history'] = $this->model_customer->get_shopping_history($user);
		$this->load->view('customer/shopping_history_list' ,$data);
	}

	
}
