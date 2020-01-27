<?php
	defined('BASEPATH') OR exit('No direct script access allowed');


	class Cpidepartement extends CI_Model
	{
		
		public function saveCpiDepartement(){

			$field = array('libelle' => $this->input->post('libelle'));
			$this->db->insert('cpidepartement', $field);
			if ($this->db->affected_rows() > 0) {
					# code...
				return true;
				}else{
					return false;
				}
		}	

		public function listeDepartementCpi()
		{
			//$this->db->order_by('idDept', 'desc');			
			$query = $this->db->get('cpidepartement');
			if ($query->num_rows() > 0) {
				# code...
				return $query->result();
			}else{
				return false;
			}
		}

		public function modifier(){	
			
		}
		
		public function getDeptById($id){	
			$this->db->where('idDept', $id);
			$query = $this->db->get('cpidepartement');
			if ($query->num_rows() > 0) {
				# code...
				return $query->row();
			}else{
				return false;
			}
		}
	}
?>