<?php
	defined('BASEPATH') OR exit('No direct script access allowed');


	class Region extends CI_Model
	{
		
		public function saveRegion(){

			$field = array('libelle' => $this->input->post('libelle'));
			$this->db->insert('region', $field);
			if ($this->db->affected_rows() > 0) {
					# code...
				return true;
				}else{
					return false;
				}
		}	

		public function listeRegion()
		{
			//$this->db->order_by('idDept', 'desc');			
			$query = $this->db->get('region');
			if ($query->num_rows() > 0) {
				# code...
				return $query->result();
			}else{
				return false;
			}
		}

		public function modifier(){	
			
		}
		
		public function getRegionById($id){	
			$this->db->where('idRegion', $id);
			$query = $this->db->get('region');
			if ($query->num_rows() > 0) {
				# code...
				return $query->row();
			}else{
				return false;
			}
		}
	}
?>