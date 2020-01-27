<?php

/**
 * Created by PhpStorm.
 * User: FOLIO
 * Date: 19/03/2019
 * Time: 13:38
 */
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserDB','user');
        $this->load->model('StatistiqueDB','statistique');
        $this->load->library('session');
        
    }
    public function index()
    {
      $this->load->view('login/login');
    
    }
    public function login()
    {
        $this->load->library('form_validation');
        $this->load->library('session');
   
       
       $email= $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->user->checkUser($email,$password);
       
        if($user && $user->etat==1  && $user->profil==1){
            $this->session->set_userdata('idUser', $user->idUser);
            $this->session->set_userdata('user', $user);
            $this->session->set_userdata('email',$email);
            $this->session->set_userdata('type',$user->libelle);
          
            redirect('Login/home');

        }if($user && $user->etat==1 && $user->profil==2){
            $this->session->set_userdata('user', $user);
            $this->session->set_userdata('email',$email);
            $this->session->set_userdata('type',$user->libelle);
            $this->session->set_userdata('idUser', $user->idUser);

            //$this->load->view('collecte/addcollecte',$data);
           redirect('collecte/add');

        }
        if($user && $user->etat==1 && $user->profil==3){
            $this->session->set_userdata('user', $user);
            $this->session->set_userdata('email',$email);
            $this->session->set_userdata('type',$user->libelle);
            $this->session->set_userdata('idUser', $user->idUser);

            //$this->load->view('collecte/addcollecte',$data);
           redirect('collecte/add');

        }
        if($user && $user->etat==1 && $user->profil==4){
            $this->session->set_userdata('user', $user);
            $this->session->set_userdata('email',$email);
            $this->session->set_userdata('type',$user->libelle);
            $this->session->set_userdata('idUser', $user->idUser);

            //$this->load->view('collecte/addcollecte',$data);
           redirect('reception/liste');

        }
        else{
            
            redirect('/');


        }

        
    }


    public function home(){
        //load session library
        $this->load->library('session');

        //restrict users to go to home if not logged in
        if($this->session->userdata('user')){
            $data['nbcollectes'] = $this->statistique->nbCollectes();
            $data['nbuser'] = $this->statistique->nbUser();
            $data['nbcolloboration'] = $this->statistique->nbcolloboration();
            $data['nbdepartementcpi'] = $this->statistique->nbdepartementcpi();
            $data['nbproprietaire'] = $this->statistique->nbproprietaire();
            $data['nbregion'] = $this->statistique->nbregion();
            $data['nbdepartement'] = $this->statistique->nbdepartement();
            $data['nbtache'] = $this->statistique->nbtache();
            $data['nbtypebienbati'] = $this->statistique->nbtypebienbati();
             $data['nbtypebiennonati'] = $this->statistique->nbtypebiennonati();
             
             $data['nbtypeservice'] = $this->statistique->nbtypeservice();
            $data['nbtypezone'] = $this->statistique->nbtypezone();
            $data['nbzone'] = $this->statistique->nbzone();
            

            $data['userstatistiques'] = $this->statistique->collectePerUser();
           // echo "kjkj".$this->statistique->nbCollectes();
            return $this->load->view('accueil/welcom',$data);
        }
        else{
            redirect('/');
        }

    }
    public function logout(){
        //load session library
        $this->load->library('session');
        $this->session->unset_userdata('user');
        redirect('/');
    }
}