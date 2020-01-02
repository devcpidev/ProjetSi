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

        public function getMaxidP(){
            $resultat = $this->db->query("SELECT Max(idproduit) AS max FROM produit");
            return $resultat->row()->max;
        }

        public function setFiles($index,$photo,$detail){

            $this->db->set('document'.$index, $photo);
            $this->db->where('idproduit',$detail);
            return $this->db->update('produit');
        }

        public function mesCollectes($iduser)
        {
            return $this->db->select('*')
            ->from('collecte')
            ->where('utilisateur',$iduser)
            ->get()
            ->result();
        }

        public function getDocs($dossier){
            $query = $this->db->query("SELECT  document1,document2 FROM collecte c WHERE c.numdossier='$dossier' ");
            return $query->row();
        }
    }
?>