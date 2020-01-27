<?php
	defined('BASEPATH') OR exit('No direct script access allowed');


	class Bureau extends CI_Model
	{
		
		public function saveBureau(){

			$field = array('libelle' => $this->input->post('libelle'), 'service' => $this->input->post('service'));
			$this->db->insert('bureau', $field);
			if ($this->db->affected_rows() > 0) {
					# code...
				return true;
				}else{
					return false;
				}
		}	

		public function listeBureau()
		{
			//$this->db->order_by('idDept', 'desc');	
			$this->db->select('*');
			$this->db->from('bureau');
			$this->db->join('service', 'service = idService');		
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
		
		public function getBureauById($id){	
			$this->db->where('idBureau', $id);
			$query = $this->db->get('bureau');
			if ($query->num_rows() > 0) {
				# code...
				return $query->row();
			}else{
				return false;
			}
		}
	}
?>