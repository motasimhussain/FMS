<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Model {


	function verify(){
		$this->db->where('username', $this->input->post("username"));
		$this->db->where('username', $this->input->post("password"));

		$query = $this->db->get('user');
		if($query->num_rows == 1){
			return true;
		}else {return false;}
	}
	

}

/* End of file auth.php */
/* Location: ./application/models/auth.php */