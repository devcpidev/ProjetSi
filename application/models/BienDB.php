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
        public function findlimit($limit,$row){

            return $this->db->get('collecte',$limit,$row)->result();
        }
		public function findlimit2($limit,$row){

			return $this->db->get('collectenonbati',$limit,$row)->result();
		}
    
        public function bienNonBati()
        {
            $this->db->select('*')->from('typebiennonbati');
            $query=$this->db->get();
            return $query->result();
        }

        public function services()
        {
            $this->db->select('*')->from('typeservices');
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
        public  function addDocument($data)
		{
			$this->db->insert('docservice',$data);
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
		public function mesCollectesnonbati($iduser)
		{
			return $this->db->select('*')
				->from('collectenonbati')
				->where('utilisateur',$iduser)
				->get()
				->result();
		}

        public function getDocs($dossier){
            $query = $this->db->query("SELECT  document1,document2 FROM collecte c WHERE c.numdossier='$dossier' ");
            return $query->row();
        }

        public function getElemByNumdossier($dossier){
            $query = $this->db->query("SELECT  * FROM collecte c WHERE c.numdossier='$dossier' ");
            return $query->row();
        }
        public function getElemByNumdossiers($iduser)
        {
            return $this->db->select('*')
            ->from('collecte')
            ->where('numdossier',$iduser)
            ->get()
            ->result();
        }

        public function findlimitcollecte($limit,$row){

            return $this->db->get('collecte',$limit,$row)->where('actif',0)->result();
        }
		public function findlimitcollecte2($limit,$row){

			return $this->db->get('collectenonbati',$limit,$row)->where('actif',0)->result();
		}
        public function collectes(){
            return $this->db->select('*')
            ->from('collecte')
            ->where('actif',0)
            ->get()
            ->result();
        }

        public function desactiver($idproduit)
        {
            $this->db->set('actif', 1);
            $this->db->where('idproduit',$idproduit);
            return $this->db->update('produit');
        }
        public function valider($idproduit)
        {
            $this->db->set('etat', 1);
            $this->db->where('idproduit',$idproduit);
            return $this->db->update('produit');
        }
        public function updateFolderName($idproduit,$new)
        {
            $this->db->set('numdossier', $new);
            $this->db->where('idproduit',$idproduit);
            return $this->db->update('produit');
        }
    }
?>
