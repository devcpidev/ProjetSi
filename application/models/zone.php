<?php
	defined('BASEPATH') OR exit('No direct script access allowed');


	class Zone extends CI_Model
	{
		
		public function saveZone(){

			$field = array('zone_name' => $this->input->post('libelle'), 'typezone' => $this->input->post('type'), 'departement' => $this->input->post('departement'));
			$this->db->insert('zone', $field);
			if ($this->db->affected_rows() > 0) {
					# code...
				return true;
				}else{
					return false;
				}
		}	

		public function listeZone()
		{
			//$this->db->order_by('idDept', 'desc');
			$this->db->select('*');
			$this->db->from('zone');
			$this->db->join('typezone', 'typezone = idTypezone');
			$this->db->join('departement', 'departement = idDepartement');				
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
		
		public function getZoneById($id){	
			$this->db->where('idZone', $id);
			$query = $this->db->get('zone');
			if ($query->num_rows() > 0) {
				# code...
				return $query->row();
			}else{
				return false;
			}
		}
	}
?>