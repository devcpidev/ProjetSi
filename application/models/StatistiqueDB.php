<?php
    class StatistiqueDB extends CI_Model{
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        public function collectePerUser()
        {
           $query = $this->db->query(" select  count(d.idDetail) as total, u.nomu as nom, u.prenomu as prenom from utilisateur u, details d where u.idUser =d.utilisateur group by utilisateur");
            return $query->result();
        }

        public function nbCollectes()
        {
           
            return $this->db->count_all('collecte');
        }
        public function nbUser()
        {
           
            return $this->db->count_all('utilisateur');
        }
        public function nbcolloboration()
        {
           
            return $this->db->count_all('collaboration');
        }
        public function nbdepartementcpi()
        {
           
            return $this->db->count_all('cpidepartement');
        }
        public function nbproprietaire()
        {
           
            return $this->db->count_all('proprietaire');
        }
        public function nbregion()
        {
           
            return $this->db->count_all('region');
        }
        public function nbdepartement()
        {
           
            return $this->db->count_all('departement');
        }
        public function nbtache()
        {
           
            return $this->db->count_all('tache');
        }
        public function nbtypebienbati()
        {
           
            return $this->db->count_all('typebienbati');
        }
        public function nbtypebiennonati()
        {
           
            return $this->db->count_all('typebiennonbati');
        }
        public function nbtypeservice()
        {
           
            return $this->db->count_all('typeservices');
        }
        public function nbtypezone()
        {
           
            return $this->db->count_all('typezone');
        }
        public function nbzone()
        {
           
            return $this->db->count_all('zone');
        }
    }
?>