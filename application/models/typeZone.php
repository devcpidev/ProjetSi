<?php
	defined('BASEPATH') OR exit('No direct script access allowed');


	class TypeZone extends CI_Model
	{
		
		public function saveTypeZone(){

			$field = array('libelle' => $this->input->post('libelle'));
			$this->db->insert('typezone', $field);
			if ($this->db->affected_rows() > 0) {
					# code...
				return true;
				}else{
					return false;
				}
		}	

		public function listeTypeZone()
		{
			//$this->db->order_by('idDept', 'desc');			
			$query = $this->db->get('typezone');
			if ($query->num_rows() > 0) {
				# code...
				return $query->result();
			}else{
				return false;
			}
		}

		public function modifier(){	
			
		}
		
		public function getTypeZoneById($id){	
			$this->db->where('idTypezone', $id);
			$query = $this->db->get('typezone');
			if ($query->num_rows() > 0) {
				# code...
				return $query->row();
			}else{
				return false;
			}
		}
	}
?>