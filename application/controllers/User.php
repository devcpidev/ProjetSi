<?php

/**
 * Created by PhpStorm.
 * User: FOLIO
 * Date: 19/03/2019
 * Time: 13:38
 */
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserDB','user');
        $this->load->library('session');
        
    }
    //fontion pour charger la liste des utilisateurs
    public function liste()
    {
        //restrict users to go to home if not logged in
        if($this->session->userdata('user')){
           
            $data['liste_users']=$this->user->listeuser();
            //chargement du header sur la page
            $this->load->view('accueil/header.php');
            $this->load->view('user/liste',$data);
            //chargement du footer 
            $this->load->view('accueil/footer.php');
        }
        else{
            redirect('/');
        }

      
    }
    //fonction pour acceder a la page ajouter de utilisateur
    public function add()
    {
       
        //restrict users to go to home if not logged in
        if($this->session->userdata('user')){
           
            $this->load->view('accueil/header.php');
      $this->load->view('user/add');
      $this->load->view('accueil/footer.php');
        }
        else{
            redirect('/');
        }
       
    
    }
    


    
}