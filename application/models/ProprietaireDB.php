<?php
    class ProprietaireDB extends CI_Model{
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function findByCNI($cni)
        {
            return $this->db->select('*')
            ->from('proprietaire')
            ->where('cnipropi',$cni)
            ->get()
            ->row();
        }

        public function getproprio($dossier){
            $query = $this->db->query("SELECT  nom,prenom,tel,adressesen,email,nomrep,telrep,emailrep,adresserep FROM collecte  WHERE numdossier='$dossier' ");
            return $query->row();
        }
    }
?>