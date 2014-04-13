<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public $data = array();

	public function __construct()
	{
		parent::__construct();
		//Do your magic here

		$this->data['dashboard'] = '';
		$this->data['invoice'] = '';
		$this->data['calendar'] = '';
		$this->data['mailbox'] = '';
		$this->data['data_table'] = '';

	}

	public function index()
	{
		$this->data['dashboard'] = ' active';
		$this->data['main_content'] = 'index';
		$this->load->view('includes/template', $this->data);
	}

	public function invoice(){
		$this->data['invoice'] = ' active';
		$this->data['main_content'] = 'invoice';
		$this->load->view('includes/template', $this->data);
	}

	public function calendar(){
		$this->data['calendar'] = ' active';
		$this->data['main_content'] = 'calendar';
		$this->load->view('includes/template2',$this->data);
	}

	public function mailbox(){
		$this->data['mailbox'] = ' active';
		$this->data['main_content'] = 'mailbox';
		$this->load->view('includes/template2',$this->data);
	}

	public function data_table(){
		$this->data['data_table'] = ' active';
		$this->data['main_content'] = 'data';
		$this->load->view('includes/template2',$this->data);
	}

}

/* End of file site.php */
/* Location: ./application/controllers/site.php */