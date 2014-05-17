<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Voucher_frm extends CI_Model {

	function add(){
		v_type;
		$data = array(
			'type' => $this->input->post('v_type'),
			if($this->input->post('v_type') == 'sales'){
				's_serial';
			} else{
				'p_serial';
			} => $this->input->post('serial'),
			'inv_for' => $this->input->post('inv_for'),
			'cmp_name' => $this->input->post('cmp_name'),
			'dscr' => if($this->input->post("method") == "cash"){
				 $this->input->post('dscr'); 
			}else{
				"CH# ".$this->input->post("chq_num")." ".$this->input->post("dscr");
			},
			'tot_amnt' => $this->input->post('tot_amnt'),
		);

		$query = $this->db->insert('sp_records',$data);

		if($query){
			return ture;
		}else{
			return false;
		}
	}

}

/* End of file voucher_frm.php */
/* Location: ./application/models/voucher_frm.php */