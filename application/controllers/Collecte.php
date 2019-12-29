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
        $titreprop = $this->input->post('titreprop');
        $cnibailleur = $this->input->post('cnibailleur');
        $autresdoc = $this->input->post('autresdoc');
        $plansite = $this->input->post('plansite');
        $autreselemproc = $this->input->post('autreselemproc');
        $planelec = $this->input->post('planelec');
        $planplomberie = $this->input->post('planplomberie');
        $cahierdesctechnique = $this->input->post('cahierdesctechnique');
        $fichinsctechnique = $this->input->post('fichinsctechnique');
        $etudefinancement = $this->input->post('etudefinancement');
        $demandeautmaire = $this->input->post('demandeautmaire');
        $moyenspreuv = $this->input->post('moyenspreuv');
        $autdemolir = $this->input->post('autdemolir');
        $plansituation = $this->input->post('plansituation');
        $jeuxcons = $this->input->post('jeuxcons');
        $ficherenseign = $this->input->post('ficherenseign');
        $devisestim = $this->input->post('devisestim');
        $taxesmunicip = $this->input->post('taxesmunicip');
        $taxesurbanism = $this->input->post('taxesurbanism');
        $timbrefisc = $this->input->post('timbrefisc');
        $enveloppe = $this->input->post('enveloppe');
        $demandeminurb = $this->input->post('demandeminurb');
        $cahiercharge = $this->input->post('cahiercharge');
        $rapportpres = $this->input->post('rapportpres');
        $planmorcel = $this->input->post('planmorcel');
        $cdnum = $this->input->post('cdnum');
        $cditem= $this->input->post('cditem');
        $timbrevar = $this->input->post('timbrevar');
        $preuverealpeine = $this->input->post('preuverealpeine');
        $plangeometre = $this->input->post('plangeometre');
        $programimetat = $this->input->post('programimetat');
        $demandebailrec= $this->input->post('demandebailrec');
        $delibcommune = $this->input->post('delibcommune');
        $exemplaires = $this->input->post('exemplaires');
        $piscine = $this->input->post('piscine');
        $nbcours = $this->input->post('nbcours');
        $typeimmeuble = $this->input->post('typeimmeuble');
        $garage = $this->input->post('garage');
        $balcon = $this->input->post('balcon');
        $buanderie = $this->input->post('buanderie');
        $ascenseur = $this->input->post('ascenseur');
        $studiositue = $this->input->post('studiositue');
        

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

       

        //upload file configuration

        $config['upload_path']          = 'upload';
        $config['allowed_types']        = 'gif|jpg|png|pdf';
        $config['max_size']             = 1000;
        $config['max_width']            = 10240;
        $config['max_height']           = 7680;
        $this->load->library('upload', $config);

        // fin

        if( ($typebienbati==1 && $collaboration==1) || ($typebienbati==2 && $collaboration==1) || ($typebienbati==3 && $collaboration==1) || ($typebienbati==4 && $collaboration==1) || ($typebienbati==5 && $collaboration==1) || ($typebienbati==6 && $collaboration==1) || ($typebienbati==7 && $collaboration==1)){
            
            if (!$this->upload->do_upload('document'))
            {
                $error = array('error' => $this->upload->display_errors());
                echo "dzezze".$this->upload->display_errors();

            }else {
                echo "yes";
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
                    'proprietaire' => $prop,
                    'titreprop' => $titreprop,
                    'cnibailleur' => $cnibailleur,
                    'autresdoc' => $autresdoc,
                    'plansite' => $plansite,
                    'autreselemproc' => $autreselemproc,
                    'nbcours' => $nbcours,
                    'piscine' => $piscine,
                    'typeimmeuble' => $typeimmeuble,
                    'garage' => $garage,
                    'studiositue' => $studiositue,
                    'buanderie' => $buanderie,
                    'balcon' => $balcon,
                    'ascenseur' => $ascenseur,
                    'document' => $_FILES['document']['name']
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
        if(($typebienbati==1 && ($collaboration==2 || $collaboration==3) ) || ($typebienbati==2 && ($collaboration==2 || $collaboration==3)) || ($typebienbati==3 && ($collaboration==2 || $collaboration==3)) || ($typebienbati==4 && ($collaboration==2 || $collaboration==3)) || ($typebienbati==5 && ($collaboration==2 || $collaboration==3)) || ($typebienbati==6 && ($collaboration==2 || $collaboration==3)) || ($typebienbati==7 && ($collaboration==2 || $collaboration==3)) ){
            

            if (!$this->upload->do_upload('document'))
            {
                $error = array('error' => $this->upload->display_errors());
                echo "dzezze".$this->upload->display_errors();

            }else {
                echo "wooy";
               
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
                    'proprietaire' => $prop,
                    'titreprop' => $titreprop,
                    'cnibailleur' => $cnibailleur,
                    'nbcours' => $nbcours,
                    'piscine' => $piscine,
                    'typeimmeuble' => $typeimmeuble,
                    'garage' => $garage,
                    'studiositue' => $studiositue,
                    'buanderie' => $buanderie,
                    'balcon' => $balcon,
                    'ascenseur' => $ascenseur,
                    'autresdoc' => $autresdoc,
                    'document' => $_FILES['document']['name']
                );
                
                if($prop!=0){
                    $prod = $this->bien->saveProduit($datacollecte);
                    if($prod!=0){
                        $detais = array(
                            'utilisateur' => $this->session->userdata('idUSer'),
                            'produit' =>$prod,
                            'tache' => 1
                        );
                    }
                }
            }
            
        }

        if(($typebienbati==1 && ($collaboration==4 || $collaboration==6)) || ($typebienbati==2 && ($collaboration==4 || $collaboration==6)) || ($typebienbati==3 && ($collaboration==4 || $collaboration==6)) || ($typebienbati==4 && ($collaboration==4 || $collaboration==6)) || ($typebienbati==5 && ($collaboration==4 || $collaboration==6)) || ($typebienbati==6 && ($collaboration==4 || $collaboration==6)) || ($typebienbati==7 && ($collaboration==4 || $collaboration==6))){
            

            if (!$this->upload->do_upload('document'))
            {
                $error = array('error' => $this->upload->display_errors());
                echo "dzezze".$this->upload->display_errors();

            }else {
                echo "wo 4";
               
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
                    'proprietaire' => $prop,
                    'titreprop' => $titreprop,
                    'cnibailleur' => $cnibailleur,
                    'autresdoc' => $autresdoc,
                    'nbcours' => $nbcours,
                    'piscine' => $piscine,
                    'typeimmeuble' => $typeimmeuble,
                    'autreselemproc' => $autreselemproc,
                    'garage' => $garage,
                    'studiositue' => $studiositue,
                    'buanderie' => $buanderie,
                    'balcon' => $balcon,
                    'ascenseur' => $ascenseur,
                    'document' => $_FILES['document']['name']
                );
                
                if($prop!=0){
                    $prod = $this->bien->saveProduit($datacollecte);
                    if($prod!=0){
                        $detais = array(
                            'utilisateur' => $this->session->userdata('idUSer'),
                            'produit' =>$prod,
                            'tache' => 1
                        );
                    }
                }
            }
            
        }

        if(($typebienbati==1 && $collaboration==5) || ($typebienbati==2 &&$collaboration==5) || ($typebienbati==3  &&$collaboration==5) || ($typebienbati==4  &&$collaboration==5) || ($typebienbati==5  &&$collaboration==5) || ($typebienbati==6  &&$collaboration==5) || ($typebienbati==7  &&$collaboration==5)){
            

            if (!$this->upload->do_upload('document'))
            {
                $error = array('error' => $this->upload->display_errors());
                echo "dzezze".$this->upload->display_errors();

            }else {
                echo "wo 5";
               
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
                    'proprietaire' => $prop,
                    'titreprop' => $titreprop,
                    'cnibailleur' => $cnibailleur,
                    'autresdoc' => $autresdoc,
                    'planelec' => $planelec,
                    'planplomberie' => $planplomberie,
                    'cahierdesctechnique' => $cahierdesctechnique,
                    'fichinsctechnique' => $fichinsctechnique,
                    'etudefinancement' => $etudefinancement,
                    'demandeautmaire' => $demandeautmaire,
                    'nbcours' => $nbcours,
                    'piscine' => $piscine,
                    'typeimmeuble' => $typeimmeuble,
                    'garage' => $garage,
                    'studiositue' => $studiositue,
                    'buanderie' => $buanderie,
                    'balcon' => $balcon,
                    'ascenseur' => $ascenseur,
                    'document' => $_FILES['document']['name']
                );

                $planelec = $this->input->post('planelec');
                $planplomberie = $this->input->post('planplomberie');
                $cahierdesctechnique = $this->input->post('cahierdesctechnique');
                $fichinsctechnique = $this->input->post('fichinsctechnique');
                $etudefinancement = $this->input->post('etudefinancement');
                
                if($prop!=0){
                    $prod = $this->bien->saveProduit($datacollecte);
                    if($prod!=0){
                        $detais = array(
                            'utilisateur' => $this->session->userdata('idUSer'),
                            'produit' =>$prod,
                            'tache' => 1
                        );
                    }
                }
            }
            
        }

        if(($typebienbati==1 && $collaboration==7) || ($typebienbati==2 && $collaboration==7) || ($typebienbati==3 && $collaboration==7) || ($typebienbati==4 && $collaboration==7) || ($typebienbati==5 && $collaboration==7) || ($typebienbati==6 && $collaboration==7) || ($typebienbati==7 && $collaboration==7)){
            

            if (!$this->upload->do_upload('document'))
            {
                $error = array('error' => $this->upload->display_errors());
                echo "dzezze".$this->upload->display_errors();

            }else {
                echo "wo 7";
               
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
                    'proprietaire' => $prop,
                    'titreprop' => $titreprop,
                    'cnibailleur' => $cnibailleur,
                    'autresdoc' => $autresdoc,
                    'planelec' => $planelec,
                    'planplomberie' => $planplomberie,
                    'cahierdesctechnique' => $cahierdesctechnique,
                    'fichinsctechnique' => $fichinsctechnique,
                    'etudefinancement' => $etudefinancement,
                    'demandeautmaire' => $demandeautmaire,
                    'moyenspreuv' => $moyenspreuv,
                    'autdemolir' => $autdemolir,
                    'nbcours' => $nbcours,
                    'piscine' => $piscine,
                    'typeimmeuble' => $typeimmeuble,
                    'garage' => $garage,
                    'studiositue' => $studiositue,
                    'buanderie' => $buanderie,
                    'balcon' => $balcon,
                    'ascenseur' => $ascenseur,
                    'document' => $_FILES['document']['name']
                );

               
                
                if($prop!=0){
                    $prod = $this->bien->saveProduit($datacollecte);
                    if($prod!=0){
                        $detais = array(
                            'utilisateur' => $this->session->userdata('idUSer'),
                            'produit' =>$prod,
                            'tache' => 1
                        );
                    }
                }
            }
            
        }

        if(($typebienbati==1 && $collaboration==8) || ($typebienbati==2 && $collaboration==8) || ($typebienbati==3 && $collaboration==8) || ($typebienbati==4 && $collaboration==8) || ($typebienbati==5 && $collaboration==8)  || ($typebienbati==6 && $collaboration==8) || ($typebienbati==7 && $collaboration==8)){
            

            if (!$this->upload->do_upload('document'))
            {
                $error = array('error' => $this->upload->display_errors());
                echo "dzezze".$this->upload->display_errors();

            }else {
                echo "wo 8";
               
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
                    'proprietaire' => $prop,
                    'titreprop' => $titreprop,
                    'cnibailleur' => $cnibailleur,
                    'autresdoc' => $autresdoc,
                    'planelec' => $planelec,
                    'planplomberie' => $planplomberie,
                    'cahierdesctechnique' => $cahierdesctechnique,
                    'fichinsctechnique' => $fichinsctechnique,
                    'etudefinancement' => $etudefinancement,
                    'demandeautmaire' => $demandeautmaire,
                    'moyenspreuv' => $moyenspreuv,
                    'autdemolir' => $autdemolir,
                    'plansituation' => $plansituation,
                    'jeuxcons' => $jeuxcons,
                    'ficherenseign' => $ficherenseign,
                    'devisestim' => $devisestim,
                    'taxesmunicip' => $taxesmunicip,
                    'taxesurbanism' => $taxesurbanism,
                    'timbrefisc' => $timbrefisc,
                    'enveloppe' => $enveloppe,
                    'demandeminurb' => $demandeminurb,
                    'cahiercharge' => $cahiercharge,
                    'rapportpres' => $rapportpres,
                    'planmorcel' => $planmorcel,
                    'cdnum' => $cdnum,
                    'cditem' => $cditem,
                    'timbrefisc' => $timbrefisc,
                    'timbrevar' => $timbrevar,
                    'nbcours' => $nbcours,
                    'piscine' => $piscine,
                    'typeimmeuble' => $typeimmeuble,
                    'garage' => $garage,
                    'studiositue' => $studiositue,
                    'buanderie' => $buanderie,
                    'balcon' => $balcon,
                    'ascenseur' => $ascenseur,
                    'document' => $_FILES['document']['name']
                );

               
                if($prop!=0){
                    $prod = $this->bien->saveProduit($datacollecte);
                    if($prod!=0){
                        $detais = array(
                            'utilisateur' => $this->session->userdata('idUSer'),
                            'produit' =>$prod,
                            'tache' => 1
                        );
                    }
                }
            }
            
        }
        if(($typebienbati==1 && $collaboration==9) || ($typebienbati==2 && $collaboration==9) || ($typebienbati==3 && $collaboration==9) || ($typebienbati==4 && $collaboration==9) || ($typebienbati==5 && $collaboration==9) || ($typebienbati==6 && $collaboration==9) || ($typebienbati==7 && $collaboration==9)){
            

            if (!$this->upload->do_upload('document'))
            {
                $error = array('error' => $this->upload->display_errors());
                echo "dzezze".$this->upload->display_errors();

            }else {
                echo "wo 9";
               
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
                    'proprietaire' => $prop,
                    'titreprop' => $titreprop,
                    'cnibailleur' => $cnibailleur,
                    'autresdoc' => $autresdoc,
                    'planelec' => $planelec,
                    'planplomberie' => $planplomberie,
                    'cahierdesctechnique' => $cahierdesctechnique,
                    'fichinsctechnique' => $fichinsctechnique,
                    'etudefinancement' => $etudefinancement,
                    'demandeautmaire' => $demandeautmaire,
                    'moyenspreuv' => $moyenspreuv,
                    'autdemolir' => $autdemolir,
                    'plansituation' => $plansituation,
                    'jeuxcons' => $jeuxcons,
                    'ficherenseign' => $ficherenseign,
                    'devisestim' => $devisestim,
                    'taxesmunicip' => $taxesmunicip,
                    'taxesurbanism' => $taxesurbanism,
                    'timbrefisc' => $timbrefisc,
                    'enveloppe' => $enveloppe,
                    'demandeminurb' => $demandeminurb,
                    'cahiercharge' => $cahiercharge,
                    'rapportpres' => $rapportpres,
                    'planmorcel' => $planmorcel,
                    'cdnum' => $cdnum,
                    'cditem' => $cditem,
                    'timbrefisc' => $timbrefisc,
                    'timbrevar' => $timbrevar,
                    'preuverealpeine' => $preuverealpeine,
                    'plangeometre' => $plangeometre,
                    'demandebailrec' => $demandebailrec,
                    'programimetat' => $programimetat,
                    'delibcommune' => $delibcommune,
                    'exemplaires' => $exemplaires,
                    'nbcours' => $nbcours,
                    'piscine' => $piscine,
                    'typeimmeuble' => $typeimmeuble,
                    'garage' => $garage,
                    'studiositue' => $studiositue,
                    'buanderie' => $buanderie,
                    'balcon' => $balcon,
                    'ascenseur' => $ascenseur,
                    'document' => $_FILES['document']['name']
                );

               
                if($prop!=0){
                    $prod = $this->bien->saveProduit($datacollecte);
                    if($prod!=0){
                        $detais = array(
                            'utilisateur' => $this->session->userdata('idUSer'),
                            'produit' =>$prod,
                            'tache' => 1
                        );
                    }
                }
            }
            
        }
    }
    


    
}