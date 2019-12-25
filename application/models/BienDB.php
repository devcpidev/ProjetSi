<?php
    class BienDB extends Ci_Model{
        public function __construct()
        {
           parent::__construct();
           $this->load->database();
        }

        public function bienBati()
        {
            $this->db->select('*')->from('typebienbati');
            $query=$this->db->get();
            return $query->result();
        }

        public function collaboration()
        {
            $this->db->select('*')->from('collaboration');
            $query=$this->db->get();
            return $query->result();
        }

        public function zone()
        {
            $this->db->select('*')->from('zone');
            $query=$this->db->get();
            return $query->result();
        }

        public function addProprietaire($data)
        {
            $this->db->insert('proprietaire',$data);
            return $this->db->insert_id();
        }
        public function saveProduit($data)
        {
            $this->db->insert('produit',$data);
            return $this->db->insert_id();
        }
        public function insertDetails($data)
        {
            $this->db->insert('details',$data);
            return $this->db->insert_id();
        }
    }
?>