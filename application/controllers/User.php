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
    public function liste($index=0)
    {
        $this->load->library('session');

        if($this->session->userdata('user')){
            $this->load->library('pagination');

            $config['base_url'] = site_url('/User/liste/');
            $config['fisrt_link'] ='fisrt';
            $config['last_link'] = 'last';
            $config['total_rows'] = count($this->user->listeuser());
            $config['per_page'] = 4;
            $this->pagination->initialize($config);
            $data['liste_users']=$this->user->findlimit(4,$index);
            $data['link']= $this->pagination->create_links();

            $this->load->view('accueil/header.php');
            $this->load->view('user/liste',$data);
            //chargement du footer 
            $this->load->view('accueil/footer.php');
        }
        else{
            redirect('/');
        }

    }
    //fontion pour charger la liste des utilisateurs
    public function listee()
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
            $data['profils']=$this->user->listeprofil();
            
            $this->load->view('user/add',$data);
            $this->load->view('accueil/footer.php');
        }
        else{
            redirect('/');
        }
       
    
    }
    public function desactiver($id)
    {
        $this->load->library('session');

        //restrict users to go to home if not logged in
        if($this->session->userdata('user')){

            $etat=0;
            $this->user->Desactiver($id,['etatu' => $etat]);
            redirect('User/liste');
        }
        else{
            redirect('/');
        }


    }
    public function activer($id)
    {
        $this->load->library('session');
    
        //restrict users to go to home if not logged in
        if($this->session->userdata('user')){
    
            $etat=1;
            $this->user->Activer($id,['etatu' => $etat]);
            redirect('User/liste');
        }
        else{
            redirect('/');
        }
    
    
    }
    public function Save()
    {
        $this->load->library('session');

        //restrict users to go to home if not logged in
        if($this->session->userdata('user')){
            $data = array(
                'nomu' => $this->input->post('nom'),
                'prenomu' => $this->input->post('prenom'),
                'profil' => $this->input->post('profil'),
                'emailu' => $this->input->post('email'),
                'adresseu' => $this->input->post('adresse'),
                'telu' => $this->input->post('tel'),
                'password' => $this->input->post('password'),
                'etatu' =>1
            );
            $data1['ok'] = $this->user->adduser($data);

            redirect('User/liste');
        }
        else{
            redirect('/');
        }

    }

    public function edit($id)
    {
        $this->load->library('session');

        //restrict users to go to home if not logged in
        if($this->session->userdata('user')){
            $this->load->view('accueil/header.php');
            $data['profils']=$this->user->listeprofil();
            $data['users']=$this->user->listeuser();
            $data['user_edit']=$this->user->getuserByid($id);
            $this->load->view('user/edit',$data);
            $this->load->view('accueil/footer.php');
        }
        else{
            redirect('/');
        }

    }
    public function update()
    {
        $this->load->library('session');

        //restrict users to go to home if not logged in
        if($this->session->userdata('user')){

            $idUser = $this->input->post('id');
            $nomu =$this->input->post('nom');
            $prenomu =$this->input->post('prenom');
            $profil =$this->input->post('profil');
            $emailu=$this->input->post('email');
            $password= $this->input->post('password');
            $adresseu= $this->input->post('adresse');
            $telu= $this->input->post('tel');
            $etatu=1;

            $this->user->Updateuser($idUser,['nomu' => $nomu, 'prenomu' => $prenomu
                ,'profil' => $profil, 'emailu' => $emailu
                ,'password' => $password, 'telu' => $telu
                ,'adresseu' => $adresseu,'etatu' => $etatu]);
            redirect('User/liste');
        }
        else{
            redirect('/');
        }
    }

    public function delete($id)
    {
        $this->load->library('session');

        //restrict users to go to home if not logged in
        if($this->session->userdata('user')){

            $this->user->deleteuser($id);
            redirect('User/liste');
        }
        else{
            redirect('/');
        }


    }
}