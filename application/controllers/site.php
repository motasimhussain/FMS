<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public $data = array();

	public function __construct(){
		parent::__construct();
		//Do your magic here

		$logged_in = $this->session->userdata('is_logged_in');

		if(!isset($logged_in) || $logged_in != true){
			echo "you dont have permission to access the page!";
			die();
		}else{
			$this->data['dashboard'] = '';
			//$this->data['inv_form'] = '';
			$this->data['forms'] = '';
			$this->data['invoice'] = '';
			$this->data['ledger'] = '';
			$this->data['calendar'] = '';
			$this->data['mailbox'] = '';
			$this->data['data_table'] = '';
			$this->data['user'] = $this->session->userdata('user');
		}
		
	}

	public function index(){
		$this->data['dashboard'] = ' active';
		$this->data['main_content'] = 'index';
		$this->load->view('includes/template', $this->data);
	}

	// this marks the start of the forms included in the Forms //

	public function add_work(){
		$this->data['forms'] = ' active';
		$this->data['main_content'] = 'add_work';
		$this->load->view('includes/template', $this->data);
	}

	public function sales_form(){
		$this->data['forms'] = ' active';
		$this->data['main_content'] = 'sales_frm';
		$this->load->view('includes/template', $this->data);
	}

	public function purchase_form(){
		$this->data['forms'] = ' active';
		$this->data['main_content'] = 'purchase_frm';
		$this->load->view('includes/template', $this->data);
	}

	public function add_co(){
		$this->data['forms'] = ' active';
		$this->data['main_content'] = 'add_co';
		$this->load->view('includes/template', $this->data);
	}

	public function add_pro(){
		$this->data['forms'] = ' active';
		$this->data['main_content'] = 'add_pro';
		$this->load->view('includes/template', $this->data);
	}

	// this marks the end of the forms included in the Forms //

	//invoce start//

	public function sales_inv(){
		$this->data['invoice'] = ' active';
		$this->data['main_content'] = 'sales_inv';
		$this->load->view('includes/template', $this->data);
	}
	public function purchase_inv(){
		$this->data['invoice'] = ' active';
		$this->data['main_content'] = 'purchase_inv';
		$this->load->view('includes/template', $this->data);
	}

	//invoice end //


	//ledger start//

	public function acc_ledger(){
		$this->data['ledger'] = ' active';
		$this->data['main_content'] = 'acc_ledger';
		$this->load->view('includes/template', $this->data);
	}

	//ledger end //

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