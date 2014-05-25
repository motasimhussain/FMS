<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public $data = array();

	public function __construct(){
		parent::__construct();
		//Do your magic here

		$logged_in = $this->session->userdata('is_logged_in');

		if(!isset($logged_in) || $logged_in != 'true'){
			echo "you dont have permission to access the page!";
			die();
		}else{
			$this->data['dashboard'] = '';
			//$this->data['inv_form'] = '';
			$this->data['forms'] = '';
			$this->data['bank'] = '';
			$this->data['employee'] = '';

			$this->data['invoice'] = '';
			$this->data['ledger'] = '';
			$this->data['calendar'] = '';
			$this->data['mailbox'] = '';
			$this->data['data_table'] = '';
			$this->data['scan_doc'] = '';
			$this->data['user'] = $this->session->userdata('user');
			$this->data['user_pic'] = $this->session->userdata('pic');

			$is_admin = $this->session->userdata('is_admin');


			//show or hide add user tab if the user is admin or not. //
			if($is_admin == 'true') {
			$this->data['hide_usr'] = 'display:block';
			}else{
				$this->data['hide_usr'] = 'display:none';
			}

		}

		$this->load->model('general_query');
		
	}

	public function index(){
		$this->data['dashboard'] = ' active';
		$this->data['main_content'] = 'index';
		$this->load->view('includes/template', $this->data);

		if ($this->session->userdata('is_admin') == true) {
			$this->data['hide_usr'] = 'display:block';
		}else{
			$this->data['hide_usr'] = 'display:none';
		}
	}

	// this marks the start of the forms included in the Forms //

	public function add_work(){
		$this->data['forms'] = ' active';
		$this->data['main_content'] = 'add_work';
		$this->load->view('includes/template', $this->data);
	}

	public function sales_frm(){

		if($this->general_query->get_sale_rec()){

			$this->data['sale_table'] =  $this->general_query->get_sale_rec();
		}else{
			$this->data['sale_table'] = 'No Sales';
		}
		
		if($this->general_query->get_wn()){
			$this->data['select_workplace'] = $this->general_query->get_wn();
		}else{
			$this->data['select_workplace'] = 'no content';
		}

		if($this->general_query->get_cn()){
			$this->data['select_company'] = $this->general_query->get_cn();
		}else{
			$this->data['select_company'] = 'no content';
		}

		if($this->general_query->get_items()){
			$this->data['select_item'] = $this->general_query->get_items();
		}else{
			$this->data['select_item'] = 'no content';
		}

		$this->data['serial'] = $this->general_query->get_curr_serial('s_serial');
		$this->data['invoice'] = ' active';
		$this->data['main_content'] = 'sales_frm';
		$this->load->view('includes/template', $this->data);
	}

	public function purchase_frm(){

		if($this->general_query->get_purchase_rec()){

			$this->data['purchase_table'] =  $this->general_query->get_purchase_rec();
		}else{
			$this->data['purchase_table'] = 'No Sales';
		}
		
		if($this->general_query->get_wn()){
			$this->data['select_workplace'] = $this->general_query->get_wn();
		}else{
			$this->data['select_workplace'] = 'no content';
		}

		if($this->general_query->get_cn()){
			$this->data['select_company'] = $this->general_query->get_cn();
		}else{
			$this->data['select_company'] = 'no content';
		}
		if($this->general_query->get_items()){
			$this->data['select_item'] = $this->general_query->get_items();
		}else{
			$this->data['select_item'] = 'no content';
		}

		$this->data['serial'] = $this->general_query->get_curr_serial('p_serial');
		$this->data['invoice'] = ' active';
		$this->data['main_content'] = 'purchase_frm';
		$this->load->view('includes/template', $this->data);
	}

	public function add_co(){
		$this->data['forms'] = ' active';
		$this->data['main_content'] = 'add_co';
		$this->load->view('includes/template', $this->data);
	}

	public function add_pro(){
		if($this->general_query->get_wn()){
			$this->data['select_workplace'] = $this->general_query->get_wn();
		}else{
			$this->data['select_workplace'] = 'no content';
		}
		$this->data['forms'] = ' active';
		$this->data['main_content'] = 'add_pro';
		$this->load->view('includes/template', $this->data);
	}

	// this marks the end of the forms included in the Forms //

	//invoce start//

	public function gen_sales_inv(){
		$this->load->model('general_query');
		if ($this->general_query->get_sales_view()) {
			$this->data['top_tables'] = $this->general_query->gen_sales_inv();
			$this->data['gen_inv'] = $this->general_query->get_sales_view();

		}
		$this->data['invoice'] = ' active';
		$this->data['main_content'] = 'p_s_inv';
		$this->load->view('includes/print_template', $this->data);	

	}

	public function gen_sales_serial(){
		$this->load->model('general_query');
		if ($this->general_query->gen_sales_serial()) {
			$this->data['top_tables'] = $this->general_query->gen_sales_inv_serial();
			$this->data['gen_inv'] = $this->general_query->gen_sales_serial();
		}
		$this->data['invoice'] = ' active';
		$this->data['main_content'] = 'p_s_inv';
		$this->load->view('includes/print_template', $this->data);
	}
	
	// public function purchase_inv(){
	// 	$this->data['invoice'] = ' active';
	// 	$this->data['main_content'] = 'purchase_inv';
	// 	$this->load->view('includes/template', $this->data);
	// }

	public function gen_purchase_inv(){
		$this->load->model('general_query');
		if ($this->general_query->get_purchase_view()) {
			$this->data['top_tables'] = $this->general_query->gen_purchase_inv();
			$this->data['gen_inv'] = $this->general_query->get_purchase_view();

		}
		$this->data['invoice'] = ' active';
		$this->data['main_content'] = 'p_p_inv';
		$this->load->view('includes/print_template', $this->data);	

	}

	public function gen_purchase_serial(){
		$this->load->model('general_query');
		if ($this->general_query->gen_purchase_serial()) {
			$this->data['top_tables'] = $this->general_query->gen_purchase_inv_serial();
			$this->data['gen_inv'] = $this->general_query->gen_purchase_serial();
		}
		$this->data['invoice'] = ' active';
		$this->data['main_content'] = 'p_p_inv';
		$this->load->view('includes/print_template', $this->data);
	}


	public function gen_challan(){
		$this->load->model('general_query');
		if ($this->general_query->get_challan()) {
			$this->data['top_tables'] = $this->general_query->gen_challan();
			$this->data['gen_inv'] = $this->general_query->get_challan();
		}

		$this->data['invoice'] = ' active';
		$this->data['main_content'] = 'd_chal';
		$this->load->view('includes/template',$this->data);
	}

	public function gen_sales_tax_inv(){
		$this->load->model('general_query');
		if ($this->general_query->get_challan()) {
			$this->data['top_tables'] = $this->general_query->gen_challan();
			$this->data['gen_inv'] = $this->general_query->get_challan();
		}

		$this->data['invoice'] = ' active';
		$this->data['main_content'] = 'sales_tax_inv';
		$this->load->view('includes/template',$this->data);
	}

	//invoice end //


	//ledger start//

	public function acc_ledger(){
		if($this->general_query->get_wn()){
			$this->data['select_workplace'] = $this->general_query->get_wn();
		}else{
			$this->data['select_workplace'] = 'no content';
		}

		if($this->general_query->get_cn()){
			$this->data['select_company'] = $this->general_query->get_cn();
		}else{
			$this->data['select_company'] = 'no content';
		}

		$this->load->model('get_ledger');
		if($this->get_ledger->get_entries()){
			$this->data['data'] = $this->get_ledger->get_entries();
		}else{
			$this->data['data'] = 'no entries';
		}
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
	
		
		

	//included in forms, is hidden on non-admin login

	public function add_usr(){
		$is_admin = $this->session->userdata('is_admin');

		if($this->general_query->get_names()){
			$this->data['names'] = $this->general_query->get_names();
		}else{
			$this->data['names'] = 'no content';
		}

		if($is_admin == 'true') {
			$this->data['employee'] = ' active';
			$this->data['main_content'] = 'add_usr';
			$this->load->view('includes/template',$this->data);
		}else{
			return;
		}
		
	}


	//scan documents

	public function scan_doc(){
		if($this->general_query->get_wn()){
			$this->data['select_workplace'] = $this->general_query->get_wn();
		}else{
			$this->data['select_workplace'] = 'no content';
		}

		if($this->general_query->get_cn()){
			$this->data['select_company'] = $this->general_query->get_cn();
		}else{
			$this->data['select_company'] = 'no content';
		}
		$this->data['scan_doc'] = ' active';
		$this->data['main_content'] = 'scan_doc';
		$this->load->view('includes/template', $this->data);
	}


		public function set_credit_limit(){
		if($this->general_query->get_cn()){
			$this->data['select_company'] = $this->general_query->get_cn();
		}else{
			$this->data['select_company'] = 'no content';
		}
		$this->data['forms'] = ' active';
		$this->data['main_content'] = 'set_credit_limit';
		$this->load->view('includes/template', $this->data);
	}

	public function voucher_frm(){
		if($this->general_query->get_cn()){
			$this->data['select_company'] = $this->general_query->get_cn();
		}else{
			$this->data['select_company'] = 'no content';
		}
		if($this->general_query->get_wn()){
			$this->data['select_workplace'] = $this->general_query->get_wn();
		}else{
			$this->data['select_workplace'] = 'no content';
		}
		$this->data['bank'] = ' active';
		$this->data['main_content'] = 'voucher_frm';
		$this->load->view('includes/template', $this->data);
	}
	public function add_bank(){
		$this->data['bank'] = ' active';
		$this->data['main_content'] = 'add_bank';
		$this->load->view('includes/template', $this->data);
	}
	public function emp_pro($id,$action){
		if ($action == "delete") {
		$this->load->model('general_query');

		if($this->general_query->del_emp($id)){
			redirect('site/all_emp');
		}
		}
		if($this->general_query->get_emp_pro($id)){
			$this->data['emp_det'] = $this->general_query->get_emp_pro($id);
			$this->data['emp_id'] = $id;
		}else{
			$this->data['emp_det'] = 'no content';
		}
		$this->data['action'] = $action;
		$this->data['employee'] = ' active';
		$this->data['main_content'] = 'emp_pro';
		$this->load->view('includes/template2', $this->data);
	}

		public function all_emp(){
		if($this->general_query->get_all_emp()){
			$this->data['all_emp'] = $this->general_query->get_all_emp();
		}else{
			$this->data['all_emp'] = 'no content';
		}
		$this->data['employee'] = ' active';
		$this->data['main_content'] = 'all_emp';
		$this->load->view('includes/template2', $this->data);
	}
}

/* End of file site.php */
/* Location: ./application/controllers/site.php */