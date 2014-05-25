<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_co extends CI_Model {

	function add(){
		$data = array(

			'c_name' => $this->input->post('c_name'),
			'c_address' => $this->input->post('c_address'),
			'c_tel' => $this->input->post('c_tel'),
			'c_gst' => $this->input->post('c_gst'),
			'c_ntn' => $this->input->post('c_ntn')
		);

		$query = $this->db->insert('company',$data);

		if($query){
			$this->initializeTables();
			return ture;
		}else{
			return false;
		}

	}

	function initializeTables(){
		$this->db->select_max('id');
		$query = $this->db->get('company');
		foreach ($query->result() as $row) {
			$id = $row->id;
		}

		$count = $this->db->count_all('company');

		for ($i=1; $i<=$count  ; $i++) { 

			$data = array(
				'type' => 'purchase',
				'inv_for' => $i,
				'cmp_name' => $id,
				'p_serial' => 0,
				'price' => 0,
				'amnt' => 0,
				'tot_amnt' => 0
			);

			$this->db->insert('sp_records',$data);

			$data = array(
				'type' => 'sales',
				'inv_for' => $i,
				'cmp_name' => $id,
				's_serial' => 0,
				'price' => 0,
				'amnt' => 0,
				'tot_amnt' => 0
			);

			$this->db->insert('sp_records',$data);

		}
	}

}

/* End of file add_co.php */
/* Location: ./application/models/add_co.php */