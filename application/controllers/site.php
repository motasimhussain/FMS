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
		$data['main_content'] = 'calendar';
		$this->load->view('includes/template2',$data);
	}

	public function mailbox(){
		$data['main_content'] = 'mailbox';
		$this->load->view('includes/template2',$data);
	}

	public function data_table(){
		$data['main_content'] = 'data';
		$this->load->view('includes/template2',$data);
	}

}

/* End of file site.php */
/* Location: ./application/controllers/site.php */