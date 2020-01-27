<?php
	defined('BASEPATH') OR exit('No direct script access allowed');


	class Service extends CI_Model
	{
		
		public function saveService(){

			$field = array('service_name' => $this->input->post('libelle'), 'departement' => $this->input->post('departement'));
			$this->db->insert('service', $field);
			if ($this->db->affected_rows() > 0) {
					# code...
				return true;
				}else{
					return false;
				}
		}	

		public function listeService()
		{
			//$this->db->order_by('idDept', 'desc');
			$this->db->select('*');
			$this->db->from('service');
			$this->db->join('cpidepartement', 'departement = idDept');			
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
		
		public function getServiceById($id){	
			$this->db->where('idService', $id);
			$query = $this->db->get('service');
			if ($query->num_rows() > 0) {
				# code...
				return $query->row();
			}else{
				return false;
			}
		}
	}
?>