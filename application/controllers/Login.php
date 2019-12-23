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
       
        if($user && $user->etat==1){

            $this->session->set_userdata('user', $user);
            $this->session->set_userdata('email',$email);
            $this->session->set_userdata('type',$user->libelle);
          
            redirect('Login/home');

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
           
            return $this->load->view('accueil/welcom');
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