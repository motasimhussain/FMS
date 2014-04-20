<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sales_inv extends CI_Model {

	function add(){
		$data = array(

			'inv_for' => $this->input->post('item_code'),
			'cmp_name' => $this->input->post('des'),
			'date' => $this->input->post('cat'),
			'desc' => $this->input->post('p_price'),
			'qunty' => $this->input->post('s_price'),
			'wght' => $this->input->post('unit'),
			'price' => $this->input->post('unit'),
			'sales_tax' => $this->input->post('unit'),
			'amount' => $this->input->post('unit')
		);


		$query = $this->db->insert('sales',$data);

		if($query){
			return ture;
		}else{
			return false;
		}

	}

}

/* End of file add_pro.php */
/* Location: ./application/models/add_pro.php */