<?php

class Statistique extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('StatistiqueDB','statistique');
        $this->load->library('session');
        
    }
    //
  
    public function liste()
    {
        $this->load->library('session');

        //restrict users to go to home if not logged in
        if($this->session->userdata('user')){
            $user = $this->session->userdata('idUser');
            $data['userstatistique'] = $this->statistique->collectePerUser();
            //var_dump($data);
            $this->load->view('accueil/header.php');
            $this->load->view('collecte/userstatistique.php',$data);
            $this->load->view('accueil/footer.php');
        }
        else{
            redirect('/');
        }
    }
    
}