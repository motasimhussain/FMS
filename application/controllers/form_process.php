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

	public function add_pro(){
		$this->load->model('add_pro');
		if($this->add_pro->add()){
			redirect('site/add_pro');
		}
	}

}

/* End of file form_process.php */
/* Location: ./application/controllers/form_process.php */