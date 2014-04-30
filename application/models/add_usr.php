<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_usr extends CI_Model {

	function add(){
		$data = array(

			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'is_admin' => $this->input->post('is_admin'),
			'name' => $this->input->post('name'),
			'l_name' => $this->input->post('l_name'),
			'f_name' => $this->input->post('f_name'),
			'address' => $this->input->post('address'),
			'nic' => $this->input->post('nic'),
			'dob' => $this->input->post('dob'),
			'pic' => $this->input->post('pic')
		);

		$query = $this->db->insert('user',$data);

		if($query){
			return ture;
		}else{
			return false;
		}

	}

}

/* End of file add_usr.php */
/* Location: ./application/models/add_usr.php */