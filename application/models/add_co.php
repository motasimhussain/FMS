<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_co extends CI_Model {

	function add(){
		$data = array(

			'id' => $this->input->post('c_id'),
			'desc' => $this->input->post('c_desc'),
			'address' => $this->input->post('c_address'),
			'dealer_name' => $this->input->post('c_dealer')
		);

		$query = $this->db->insert('company',$data);

		if($query){
			return ture;
		}else{
			return false;
		}

	}

}

/* End of file add_co.php */
/* Location: ./application/models/add_co.php */