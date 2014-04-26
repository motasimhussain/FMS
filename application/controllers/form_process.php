<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form_process extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		
	}

	public function add_co(){
		$this->load->model('add_co');
		if($this->add_co->add()){
			redirect('site/add_co');
		}
	}

	public function add_pro(){
		$this->load->model('add_pro');
		if($this->add_pro->add()){
			redirect('site/add_pro');
		}
	}
	public function sales_inv(){
		$this->load->model('sales_inv');
		if ($this->sales_inv->add()) {
			redirect('site/inv_form');
		}
	}

	public function add_work(){
		$this->load->model('add_work');
		if ($this->add_work->add()) {
			redirect('site/add_work');
		}
	}

}

/* End of file form_process.php */
/* Location: ./application/controllers/form_process.php */