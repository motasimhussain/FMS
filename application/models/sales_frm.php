<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sales_frm extends CI_Model {

	function add(){
		$data = array(

			'inv_for' => $this->input->post('inv_for'),
			'cmp_name' => $this->input->post('cmp_name'),
			'acc' => $this->input->post('acc'),
			'serial' => $this->input->post('seril'),
			'ref_num' => $this->input->post('ref_num'),
			'bill_num' => $this->input->post('bill_num'),
			'date' => $this->input->post('date'),
			'dscr' => $this->input->post('desc'),
			'qunty' => $this->input->post('qunty'),
			'price' => $this->input->post('price'),
			'wght' => $this->input->post('wght'),
			'sales_tax' => $this->input->post('sales_tax'),
			'fed_tax' => $this->input->post('fed_tax'),
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