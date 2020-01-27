<?php
	defined('BASEPATH') OR exit('No direct script access allowed');


	class TypeProduit extends CI_Model
	{
		
		public function saveTypeProduit(){

			$field = array('libelle' => $this->input->post('libelle'));
			$this->db->insert('typeproduit', $field);
			if ($this->db->affected_rows() > 0) {
					# code...
				return true;
				}else{
					return false;
				}
		}	

		public function listeTypeProduit()
		{
			//$this->db->order_by('idDept', 'desc');			
			$query = $this->db->get('typeproduit');
			if ($query->num_rows() > 0) {
				# code...
				return $query->result();
			}else{
				return false;
			}
		}

		public function modifier(){	
			
		}
		
		public function getTypeProduitById($id){	
			$this->db->where('idTypeProduit', $id);
			$query = $this->db->get('typeproduit');
			if ($query->num_rows() > 0) {
				# code...
				return $query->row();
			}else{
				return false;
			}
		}
	}
?>