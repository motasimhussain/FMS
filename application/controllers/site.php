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

}

/* End of file site.php */
/* Location: ./application/controllers/site.php */