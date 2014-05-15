<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Get_ledger extends CI_Model {

	public function get_entries()
	{
		$parse_date = $this->input->post('led_date');
		$date_range = explode(" - ", $parse_date);

		$fields = array(
						'inv_for' => $this->input->post('led_for'),
						'cmp_name' => $this->input->post('coname'),
		 				);
		$this->db->where($fields);
		$this->db->where('date BETWEEN "' . $date_range[0]. '" AND "' . $date_range[1].'"');

		$query = $this->db->get('ledger');

		foreach ($query->result() as $row) {
			echo $row->debit. " ";
		}

		die();
	}

}

/* End of file get_ledger.php */
/* Location: ./application/models/get_ledger.php */