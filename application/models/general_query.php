<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class General_query extends CI_Model {


	/////////    SALES MODELS ////////
	function del_emp($id){
		$this->db->where('id', $id);
		$this->db->delete('user');
		return True;
	}

	function get_all_emp(){
	
		$query = $this->db->get('user');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function get_emp_pro($id){
		$this->db->where('id', $id);
		$query = $this->db->get('user');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function gen_sales_serial(){
	
		$this->db->where('s_serial', $this->input->post('serial'));
		$query = $this->db->get('sales_inv');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function gen_sales_inv(){
		return $this->db->query('SELECT w_name, w_address, w_tel, s_serial, w_gst, w_ntn, bill_num, c_name, c_address, ref_num, amnt_in_wrd, 
						  SUM(sales_tax_tot) AS tot_tax, SUM(amnt) 
						  AS tot_amnt, (SUM(sales_tax_tot) + SUM(amnt)) 
						  AS tot_bill 
						  FROM sales_inv 
						  WHERE `sale_sess`="'.$this->input->post("sale_sess").'"'
						);


	}

	function gen_sales_inv_serial(){
		return $this->db->query('SELECT w_name, w_address, w_tel, s_serial, w_gst, w_ntn, bill_num, c_name, c_address, ref_num, amnt_in_wrd, 
						  SUM(sales_tax_tot) AS tot_tax, SUM(amnt) 
						  AS tot_amnt, (SUM(sales_tax_tot) + SUM(amnt)) 
						  AS tot_bill 
						  FROM sales_inv 
						  WHERE `s_serial`="'.$this->input->post("serial").'"'
						);


	}


	function get_sale_rec(){

		$s_id = $this->session->userdata('sale_id');

		if(isset($s_id) && $s_id != 0){

		$this->db->where('sale_sess',$this->session->userdata('sale_id'));
		$query = $this->db->get('sp_records');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}else{
			return false;
		}

		}
	}

	////////// END SALES MODELS //////////////

	///////// PURCHASE MODELS //////////

	function gen_purchase_serial(){
	
		$this->db->where('p_serial', $this->input->post('serial'));
		$query = $this->db->get('purchase_inv');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function gen_purchase_inv(){
		return $this->db->query('SELECT w_name, w_address, w_tel, p_serial, w_gst, w_ntn, bill_num, c_name, c_address, ref_num, amnt_in_wrd, 
						  SUM(sales_tax_tot) AS tot_tax, SUM(amnt) 
						  AS tot_amnt, (SUM(sales_tax_tot) + SUM(amnt)) 
						  AS tot_bill 
						  FROM purchase_inv 
						  WHERE `sale_sess`="'.$this->input->post("sale_sess").'"'
						);


	}

	function gen_purchase_inv_serial(){
		return $this->db->query('SELECT w_name, w_address, w_tel, p_serial, w_gst, w_ntn, bill_num, c_name, c_address, ref_num, amnt_in_wrd, 
						  SUM(sales_tax_tot) AS tot_tax, SUM(amnt) 
						  AS tot_amnt, (SUM(sales_tax_tot) + SUM(amnt)) 
						  AS tot_bill 
						  FROM purchase_inv 
						  WHERE `p_serial`="'.$this->input->post("serial").'"'
						);


	}

	function get_purchase_rec(){

		$p_id = $this->session->userdata('purchase_id');

		if(isset($p_id) && $p_id != 0){

			$this->db->where('sale_sess', $this->session->userdata('purchase_id'));
			$query = $this->db->get('sp_records');
			if($query->num_rows() > 0){
				foreach ($query->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}else{
				return false;
			}
		}
	}

	///////// END PURCHASE MODELS //////////

	////////// CHALLAN START ////////////

	function get_challan(){

		$ser = $this->input->post('serial');

		if(isset($ser) && $ser != 0){

		$this->db->where('s_serial', $this->input->post('serial'));
		$query = $this->db->get('sales_inv');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		}		

	}

	function gen_challan(){

		return $this->db->query('SELECT * FROM sales_inv WHERE `s_serial`="'.$this->input->post("serial").'"');

	}

	////////// CHALLAN END ////////////


	function get_curr_serial($s_type){

		$this->db->select_max($s_type);
		$query = $this->db->get('sp_records');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$num = $row->$s_type;
			}
		if(!$this->session->userdata('sale_id') && !$this->session->userdata('purchase_id'))
		{
			return $num + 1;

		}
		else
			return $num;

		}
	}
	

	function get_sales_view(){
		$this->db->where('sale_sess', $this->input->post('sale_sess'));
		$query = $this->db->get('sales_inv');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function get_purchase_view(){
		$this->db->where('sale_sess', $this->input->post('sale_sess'));
		$query = $this->db->get('purchase_inv');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function get_wn(){
		$this->db->select('id,w_name');
		$query = $this->db->get('workplace');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function get_cn(){
		$this->db->select('id,c_name');
		$query = $this->db->get('company');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function get_items(){
		$this->db->select('i_code,i_name');
		$query = $this->db->get('items');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function get_names(){
		$this->db->select('id,name');
		$query = $this->db->get('user');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function get_pic(){
		$this->db->select('pic');
		$query = $this->db->get('user');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function update_usr_img($data){
		$data = array(
			'pic' => base_url()."uploads/".$data
		);

		$this->db->where('id',$this->input->post('user_id'));
		$this->db->update('user',$data);
	}

	function check_credit($cmp_name){
		$this->db->where('cmp_name',$cmp_name);
		$this->db->select_sum('credit','amnt');
		$query = $this->db->get('ledger');

		return $query->row()->amnt;

	}

	function check_credit_limit($id){
		$this->db->where('id',$id);
		$this->db->select('crd_limit');
		$query = $this->db->get('company');
		// foreach ($query->result() as $row) {
		// 	if($row->crd_limit == 0){
		// 		return 999999999;
		// 	}else{
		// 		return $row->crd_limit;
		// 	}
		// }
		if($query->num_rows() > 0){
		  	$row = $query->row();
		   	$crd_limit = $row->crd_limit;
		}

		if(isset($crd_limit) || $crd_limit == 0){
			if($crd_limit == 0){
				return (double) 99999999;
			}else{
				return (double)$crd_limit;
			}
		}
	}

	function get_cmp_ids(){
		$query = $this->db->get('company');
	    $array = array();

	    foreach($query->result() as $row)
	    {
	        $array[] = $row->id; // add each user id to the array
	    }

	    return $array;
	}

	function evaluate_credit(){
		$j = 0;
		$array = $this->get_cmp_ids();
		$credit = 0;
		$credit_limit = 0;
		for ($i=0; $i < sizeof($array); $i++) {

			$credit = $this->check_credit($array[$i]);
			$credit_limit = $this->check_credit_limit($array[$i]);
			if($credit > $credit_limit){
				$data[$j] = $array[$i];
				$j++;
			}
		}
		if($j>0){
			return $data;
		}else{
			return false;
		}
	}

	function alert_credit(){
		$arr = array();
		if($data = $this->evaluate_credit()){
			for ($i=0; $i < sizeof($data); $i++) {
				$cmp =  $this->get_cn_by_id($data[$i]);
				$limit = $this->get_cmp_limit($data[$i]);
				$credit = $this->check_credit($data[$i]);
				$arr[$i] = array(
						'company' => $cmp,
						'limit' => $limit,
						'credit' => $credit
				);
			}
			return $arr;
		}else{
			return false;
		}
	}

	function get_cn_by_id($id){
		$this->db->select('c_name');
		$this->db->where('id',$id);
		$query = $this->db->get('company');
		if($query->num_rows() > 0){
			return $query->row()->c_name;
		}
	}

	function get_cmp_limit($id){
		$this->db->select('crd_limit');
		$this->db->where('id',$id);
		$query = $this->db->get('company');
		if($query->num_rows() > 0){
			return $query->row()->crd_limit;
		}
	}

}


/* End of file general_query.php */
/* Location: ./application/models/general_query.php */