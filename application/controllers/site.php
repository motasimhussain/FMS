<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$data['main_content'] = 'index';
		$this->load->view('includes/template', $data);
	}

	public function invoice(){
		$data['main_content'] = 'invoice';
		$this->load->view('includes/template', $data);
	}

	public function calendar(){
		$this->load->view('calendar');
	}

	public function mailbox(){
		$this->load->view('mailbox');
	}

	public function data_table(){
		$this->load->view('data');
	}

}

/* End of file site.php */
/* Location: ./application/controllers/site.php */