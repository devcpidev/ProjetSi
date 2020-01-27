<?php
	defined('BASEPATH') OR exit('No direct script access allowed');


	class Departement extends CI_Model
	{
		
		public function saveDepartement(){

			$field = array('departement_name' => $this->input->post('libelle'), 'region' => $this->input->post('region'));
			$this->db->insert('departement', $field);
			if ($this->db->affected_rows() > 0) {
					# code...
				return true;
				}else{
					return false;
				}
		}	

		public function listeDepartement()
		{
			//$this->db->order_by('idDept', 'desc');
			$this->db->select('*');
			$this->db->from('departement');
			$this->db->join('region', 'region = idRegion');			
			$query = $this->db->get();
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
			$query = $this->db->get('departement');
			if ($query->num_rows() > 0) {
				# code...
				return $query->row();
			}else{
				return false;
			}
		}
	}
?>