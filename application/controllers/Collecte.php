<?php
/**
 * Created by PhpStorm.
 * User: FOLIO
 * Date: 19/03/2019
 * Time: 13:38
 */
class Collecte extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
      
        $this->load->library('session');
        
    }
    //
    public function add()
    {
        $this->load->library('session');

        //restrict users to go to home if not logged in
        if($this->session->userdata('user')){
           
            $this->load->view('accueil/header.php');
        $this->load->view('collecte/addcollecte');
      $this->load->view('accueil/footer.php');
        }
        else{
            redirect('/');
        }

       
     
    
    }
    public function liste()
    {
        $this->load->library('session');

        //restrict users to go to home if not logged in
        if($this->session->userdata('user')){
           
            $this->load->view('accueil/header.php');
           $this->load->view('collecte/listecollecte');
           $this->load->view('accueil/footer.php');
        }
        else{
            redirect('/');
        }

       
     
    
    }
    


    
}