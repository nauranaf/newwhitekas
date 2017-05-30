<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->model('model_products');
	}

	public function index()

	{
		$data['products'] = $this->model_products->all();
		$this->load->view('welcome_message',$data);
	}

	public function add_to_cart($product_id){
		$product = $this->model_products->find($product_id);
		$data = array(
        'id'      => $product->id,
        'qty'     => 1,
        'price'   => $product->price,
        'name'    => $product->name,
		);

			$this->cart->insert($data);
			redirect(base_url());

	}

	public function cart(){
		//display what currentyly inside the cart
		//print_r($this->cart->contents());
		$this->load->view('show_cart');
	}

	public function clear_cart(){
		$this->cart->destroy();
		redirect(base_url());
	}
}
