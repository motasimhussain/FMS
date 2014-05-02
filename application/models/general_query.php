<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class General_query extends CI_Model {

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

	function get_curr_serial(){
		$this->db->select_max('serial');
		$query = $this->db->get('sales');
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$num = $row->serial;
			}
			return $num;
		}
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