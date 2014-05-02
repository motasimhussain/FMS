<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sales_frm extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->db->select_max('serial');
		$query = $this->db->get('sales');
		//cho $query->$db->get->row()->serial;
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$num = $row->serial;
			}

			$data  = array('curr_serial' => ,$num );
			$this->session->set_userdata($data);

		}
		
	}

	function add(){
		if(!$this->session->userdata('sale_id'))
		{
			$data = array('sale_id' => time());
			$this->session->set_userdata($data); 
			echo $this->session->userdata('sale_id');

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
			'fed_tax' => $this->input->post('fed_tax'),
			'amnt' => $this->input->post('amnt'),
			'amnt_in_wrd' => $this->input->post('amnt_wrd'),
			'sale_sess' => $this->session->userdata('sale_id')
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