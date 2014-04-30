<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sales_inv extends CI_Model {

	function add(){
		$data = array(

			'inv_for' => $this->input->post('inv_for'),
			'cmp_name' => $this->input->post('cmp_name'),
			'date' => $this->input->post('date'),
			'descr' => $this->input->post('desc'),
			'qunty' => $this->input->post('qunty'),
			'wght' => $this->input->post('wght'),
			'price' => $this->input->post('price'),
			'sales_tax' => $this->input->post('sales_tax'),
			'amnt' => $this->input->post('amnt'),
			'amnt_in_wrd' => $this->input->post('amnt_wrd')
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