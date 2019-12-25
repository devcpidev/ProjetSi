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
        $this->load->model('BienDB','bien');
        $this->load->library('session');
        
    }
    //
    public function add()
    {
        $this->load->library('session');

        //restrict users to go to home if not logged in
        if($this->session->userdata('user')){
            $data['zone'] = $this->bien->zone();
            $data['collaboration'] = $this->bien->collaboration();
            $data['type'] = $this->bien->bienBati();
            $this->load->view('accueil/header.php');
            $this->load->view('collecte/addcollecte',$data);
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

    public function save()
    {
        //recuperation des données du propriétaire
        $nom = $this->input->post('nom');
        $prenom = $this->input->post('prenom');
        $tel= $this->input->post('tel');
        $email = $this->input->post('email');
        $adressesen = $this->input->post('adressesen');
        $nomrep = $this->input->post('nomrep');
        $telrep= $this->input->post('telrep');
        $emailrep = $this->input->post('emailrep');
        $adresserep = $this->input->post('adresserep');
        //Recupération des champs input de la collecte 
        $adresse = $this->input->post('adresse');
        $nature = $this->input->post('nature');
        $positionnement= $this->input->post('positionnement');
        $usagebienbati = $this->input->post('usagebienbati');
        $typebienbati = $this->input->post('typebienbati');
        $nbpieces = $this->input->post('nbpieces');
        $nbsalledebain = $this->input->post('nbsalledebain');
        $nbtoilettes = $this->input->post('nbtoilettes');
        $jardin = $this->input->post('jardin');
        $nbgarage = $this->input->post('nbgarage');
        $typecuisine= $this->input->post('typecuisine');
        $etatdroitreel = $this->input->post('etatdroitreel');
        $actedevente = $this->input->post('actedevente');
        $autorisationcons = $this->input->post('autorisationcons');
        $planbetonarme = $this->input->post('planbetonarme');
        $planarchi = $this->input->post('planarchi');
        $planindividuelap = $this->input->post('planindividuelap');
        $autorisationbail = $this->input->post('autorisationbail');
        $deliberationind = $this->input->post('deliberationind');
        $attestbail = $this->input->post('attestbail');
        $procceder = $this->input->post('procceder');
        $zone = $this->input->post('zone');
        $collaboration = $this->input->post('collaboration');

        if($typebienbati==1){
            echo "yes";
            $dataproprietaire= array(
                'nom' => $nom,
                'prenom' =>$prenom,
                'tel' => $tel,
                'email' => $email,
                'adressesen' => $adressesen,
                'nomrep' =>$nomrep,
                'telrep' => $telrep,
                'emailrep' => $emailrep,
                'adresserep' => $adresserep
            );

             //insertion du proprietaire
             $prop = $this->bien->addProprietaire($dataproprietaire);
            $datacollecte = array(
                'adresse' => $adresse,
                'nature' =>$nature,
                'usagebienbati' => $usagebienbati,
                'typebienbati' => $typebienbati,
                'nbpieces' => $nbpieces,
                'nbtoilettes' => $nbtoilettes,
                'jardin' => $jardin,
                'nbgarage' => $nbgarage,
                'typecuisine' => $typecuisine,
                'etatdroitreel' => $etatdroitreel,
                'actedevente' => $actedevente,
                'autorisationcons' => $autorisationcons,
                'planbetonarme' => $planbetonarme,
                'planarchi' => $planarchi,
                'planindividuelap' => $planindividuelap,
                'autorisationbail' => $autorisationbail,
                'deliberationind' => $deliberationind,
                'attestbail' => $attestbail,
                'procceder' => $procceder,
                'zone' => $zone,
                'collaboration' => $collaboration,
                'proprietaire' => $prop
            );

           
            if($prop!=0){
                $prod = $this->bien->saveProduit($datacollecte);
                if($prod!=0){
                    $detais = array(
                        'utilisateur' =>    $this->session->userdata('idUSer'),
                        'produit' =>$prod,
                        'tache' => 1
                    );
                }
            }
        }
    }
    


    
}