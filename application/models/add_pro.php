<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_pro extends CI_Model {

	function add(){
		$data = array(

			'item_code' => $this->input->post('item_code'),
			'des' => $this->input->post('des'),
			'cat' => $this->input->post('cat'),
			'p_price' => $this->input->post('p_price'),
			's_price' => $this->input->post('s_price'),
			'unit' => $this->input->post('unit')
		);

		$query = $this->db->insert('items',$data);

		if($query){
			return ture;
		}else{
			return false;
		}

	}

}

/* End of file add_pro.php */
/* Location: ./application/models/add_pro.php */