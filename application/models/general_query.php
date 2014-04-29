<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class General_query extends CI_Model {

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