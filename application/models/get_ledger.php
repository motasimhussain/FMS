<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Get_ledger extends CI_Model {

	public function get_entries()
	{

		$parse_date = $this->input->post('led_date');

		if(isset($parse_date) && $parse_date!= ""){

			list($date_1, $date_2) = explode(" - ", $parse_date);
			// print_r($date_range);
			// die();

			$fields = array(
							'inv_for' => $this->input->post('led_for'),
							'cmp_name' => $this->input->post('coname'),
			 				);
			$this->db->where($fields);
			$this->db->where('date BETWEEN "' . $date_1. '" AND "' . $date_2.'"');

			$query = $this->db->get('ledger');
			if($query->num_rows() > 0){
				foreach ($query->result() as $row) {
					$data[] = $row;
				}

				return $data;
			}
		}
	}

}

/* End of file get_ledger.php */
/* Location: ./application/models/get_ledger.php */