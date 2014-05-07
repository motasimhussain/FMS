<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class General_query extends CI_Model {


	/////////    SALES MODELS ////////

	function gen_sales_serial(){
	
		$this->db->where('serial', $this->input->post('serial'));
		$query = $this->db->get('sales_inv');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function gen_sales_inv(){
		return $this->db->query('SELECT w_name, w_address, w_tel, serial, w_gst, w_ntn, bill_num, c_name, c_address, ref_num, amnt_in_wrd, 
						  SUM(sales_tax_tot) AS tot_tax, SUM(amnt) 
						  AS tot_amnt, (SUM(sales_tax_tot) + SUM(amnt)) 
						  AS tot_bill 
						  FROM sales_inv 
						  WHERE `sale_sess`="'.$this->input->post("sale_sess").'"'
						);


	}

	function gen_sales_inv_serial(){
		return $this->db->query('SELECT w_name, w_address, w_tel, serial, w_gst, w_ntn, bill_num, c_name, c_address, ref_num, amnt_in_wrd, 
						  SUM(sales_tax_tot) AS tot_tax, SUM(amnt) 
						  AS tot_amnt, (SUM(sales_tax_tot) + SUM(amnt)) 
						  AS tot_bill 
						  FROM sales_inv 
						  WHERE `serial`="'.$this->input->post("serial").'"'
						);


	}


	function get_sale_rec(){

		$this->db->where('sale_sess', $this->session->userdata('sale_id'));
		$query = $this->db->get('sales');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	////////// END SALES MODELS //////////////

	///////// PURCHASE MODELS //////////

	function gen_purchase_serial(){
	
		$this->db->where('serial', $this->input->post('serial'));
		$query = $this->db->get('purchase_inv');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	function gen_purchase_inv(){
		return $this->db->query('SELECT w_name, w_address, w_tel, serial, w_gst, w_ntn, bill_num, c_name, c_address, ref_num, amnt_in_wrd, 
						  SUM(sales_tax_tot) AS tot_tax, SUM(amnt) 
						  AS tot_amnt, (SUM(sales_tax_tot) + SUM(amnt)) 
						  AS tot_bill 
						  FROM purchase_inv 
						  WHERE `purchase_sess`="'.$this->input->post("sale_sess").'"'
						);


	}

	function gen_purchase_inv_serial(){
		return $this->db->query('SELECT w_name, w_address, w_tel, serial, w_gst, w_ntn, bill_num, c_name, c_address, ref_num, amnt_in_wrd, 
						  SUM(sales_tax_tot) AS tot_tax, SUM(amnt) 
						  AS tot_amnt, (SUM(sales_tax_tot) + SUM(amnt)) 
						  AS tot_bill 
						  FROM purchase_inv 
						  WHERE `serial`="'.$this->input->post("serial").'"'
						);


	}

	function get_purchase_rec(){

		$this->db->where('purchase_sess', $this->session->userdata('purchase_id'));
		$query = $this->db->get('purchase');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	///////// END PURCHASE MODELS //////////


	function get_curr_serial($val){
		if(!$this->session->userdata('sale_id'))
		{
		$this->db->select_max('serial');
		$query = $this->db->get($val);
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$num = $row->serial;
			}
			return $num + 1;

		}

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
		$this->db->where('purchase_sess', $this->input->post('purchase_sess'));
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

}

/* End of file general_query.php */
/* Location: ./application/models/general_query.php */