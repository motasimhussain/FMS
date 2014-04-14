<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public $data = array();

	public function __construct(){
		parent::__construct();
		//Do your magic here

		$this->data['dashboard'] = '';
		$this->data['inv_form'] = '';
		$this->data['calendar'] = '';
		$this->data['mailbox'] = '';
		$this->data['data_table'] = '';

	}

	public function index(){
		$this->data['dashboard'] = ' active';
		$this->data['main_content'] = 'index';
		$this->load->view('includes/template', $this->data);
	}

	// this marks rthe start of the forms included in the Forms

	public function inv_form(){
		$this->data['inv_form'] = ' active';
		$this->data['main_content'] = 'inv_form';
		$this->load->view('includes/template', $this->data);
	}

	public function add_co(){
		$this->data['inv_form'] = ' active';
		$this->data['main_content'] = 'add_co';
		$this->load->view('includes/template', $this->data);
	}

	public function add_pro(){
		$this->data['inv_form'] = ' active';
		$this->data['main_content'] = 'add_pro';
		$this->load->view('includes/template', $this->data);
	}

	// this marks the end of the forms included in the Forms

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