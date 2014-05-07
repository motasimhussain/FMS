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

	public function add_usr(){
		$this->load->model('add_usr');
		if($this->add_usr->add()){
			redirect('site/add_usr');
		}
	}

	public function sales_frm(){
		$this->load->model('sales_frm');
		if ($this->sales_frm->add()) {
			redirect('site/sales_frm');
		}
	}

	public function purchase_frm(){
		$this->load->model('purchase_frm');
		if ($this->sales_frm->add()) {
			redirect('site/purchase_frm');
		}
	}


	public function add_work(){
		$this->load->model('add_work');
		if ($this->add_work->add()) {
			redirect('site/add_work');
		}
	}

	public function get_ledger(){
		$this->load->model('get_ledger');
		if ($this->get_ledger->get_entry()) {
			redirect('site/acc_ledger');
		}
	}

}

/* End of file form_process.php */
/* Location: ./application/controllers/form_process.php */