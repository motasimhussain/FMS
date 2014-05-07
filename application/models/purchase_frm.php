<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Purchase_frm extends CI_Model {

	function add(){
		if(!$this->session->userdata('purchase_id'))
		{
			$data = array('purchase_id' => time());
			$this->session->set_userdata($data); 
			echo $this->session->userdata('purchase_id');

		}
		$data = array(

			'inv_for' => $this->input->post('inv_for'),
			'cmp_name' => $this->input->post('cmp_name'),
			'acc' => $this->input->post('acc'),
			'serial' => $this->input->post('serial'),
			'ref_num' => $this->input->post('ref_num'),
			'bill_num' => $this->input->post('bill_num'),
			'date' => $this->input->post('date'),
			'dscr' => $this->input->post('desc'),
			'qunty' => $this->input->post('qunty'),
			'price' => $this->input->post('price'),
			'wght' => $this->input->post('wght'),
			'sales_tax' => $this->input->post('sales_tax'),
			'sales_tax_tot' => $this->input->post('st_num'),
			'fed_tax' => $this->input->post('fed_tax'),
			'amnt' => $this->input->post('amnt'),
			'tot_amnt' => $this->input->post('tot_amnt'),
			'amnt_in_wrd' => $this->input->post('amnt_wrd'),
			'purchase_sess' => $this->session->userdata('purchase_id')
		);


		$query = $this->db->insert('purchase',$data);

		if($query){
			return ture;
		}else{
			return false;
		}

	}

}

/* End of file purchase_frm.php */
/* Location: ./application/models/purchase_frm.php */