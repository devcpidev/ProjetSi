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

    public function BienNonBati()
    {
        $data['type'] = $this->bien->bienNonBati();
        $data['services'] = $this->bien->services();
        $this->load->view('accueil/header.php');
        $this->load->view('collecte/collecte_bien_non_bati',$data);
        $this->load->view('accueil/footer.php');
    }
    public function listee()
    {
        $this->load->library('session');

        //restrict users to go to home if not logged in
        if($this->session->userdata('user')){
            $user = $this->session->userdata('idUser');
            $data['infos'] = $this->bien->mesCollectes($user);
            $data['collectes'] = $this->bien->collectes();
            $this->load->view('accueil/header.php');
            $this->load->view('collecte/listecollecte',$data);
            $this->load->view('accueil/footer.php');
        }
        else{
            redirect('/');
        }
    }
    public function liste($index=0)
    {
        $this->load->library('session');

        if($this->session->userdata('user')){
            $this->load->library('pagination');
            $user = $this->session->userdata('idUser');
            $config['base_url'] = site_url('/Collecte/liste/');
            $config['fisrt_link'] ='fisrt';
            $config['last_link'] = 'last';
            $config['total_rows'] = count($this->bien->mesCollectes($user));
            $config['per_page'] = 8;
            $this->pagination->initialize($config);
            $data['infos']=$this->bien->findlimit(8,$index);
            $data['link']= $this->pagination->create_links();

            $this->load->view('accueil/header.php');
            $this->load->view('collecte/listecollecte',$data);
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
        $broutep = $this->input->post('broutep');
        $broute = $this->input->post('broute');
        $angle = $this->input->post('angle');
        $loinmarche = $this->input->post('loinmarche');
        $presmarche = $this->input->post('presmarche');
        $loinculte = $this->input->post('loinculte');
        $presculte = $this->input->post('presculte');
        $loinecole = $this->input->post('loinecole');
        $presecole = $this->input->post('presecole');

           

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

        //création du numero de dossier
        $numdossier="";
        $user = $this->session->userdata('idUser');
        if($user=2){
            $max =  $this->bien->getMaxidP();
            $date = date("Y-d");
            $numdossier = "zu"."".$date."".$max;
        }
        
        if($user=3){
            $max =  $this->bien->getMaxidP();
            $date = date("Y-d");
            $numdossier = "zpu"."".$date."".$max;
            
        }
       // echo "yes".$this->session->userdata('idUser');

        if( ($typebienbati==1 && $collaboration==1) || ($typebienbati==2 && $collaboration==1) || ($typebienbati==3 && $collaboration==1) || ($typebienbati==4 && $collaboration==1) || ($typebienbati==5 && $collaboration==1) || ($typebienbati==6 && $collaboration==1) || ($typebienbati==7 && $collaboration==1)){
            
            // echo "yes".$numdossier;
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
                'broutep' => $broutep,
                'broute' =>$broute,
                'angle' => $angle,
                'loinmarche' => $loinmarche,
                'presmarche' => $presmarche,
                'loinculte' =>$loinculte,
                'presculte' => $presculte,
                'loinecole' =>$loinecole,
                'presecole' => $presecole,
                'numdossier' => $numdossier
               
            );
            if($prop!=0){
                $prod = $this->bien->saveProduit($datacollecte);
                if($prod!=0){
                    $user = $this->session->userdata('idUser');
                    echo "ok : ".$this->session->userdata('idUser');
                    $details = array(
                        'utilisateur' => $user,
                        'produit' =>$prod,
                        'tache' => 1
                    );
                    $this->bien->insertDetails($details);
                    $this->uploadFile();
                    redirect('collecte/liste');
                }
            }
            
        }
        if(($typebienbati==1 && ($collaboration==2 || $collaboration==3) ) || ($typebienbati==2 && ($collaboration==2 || $collaboration==3)) || ($typebienbati==3 && ($collaboration==2 || $collaboration==3)) || ($typebienbati==4 && ($collaboration==2 || $collaboration==3)) || ($typebienbati==5 && ($collaboration==2 || $collaboration==3)) || ($typebienbati==6 && ($collaboration==2 || $collaboration==3)) || ($typebienbati==7 && ($collaboration==2 || $collaboration==3)) ){
           
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
                'broutep' => $broutep,
                'broute' =>$broute,
                'angle' => $angle,
                'loinmarche' => $loinmarche,
                'presmarche' => $presmarche,
                'loinculte' =>$loinculte,
                'presculte' => $presculte,
                'loinecole' =>$loinecole,
                'presecole' => $presecole,
                'numdossier' => $numdossier
            );
            
            if($prop!=0){
                $prod = $this->bien->saveProduit($datacollecte);
                if($prod!=0){
                    $user = $this->session->userdata('idUser');
                    echo "ok : ".$this->session->userdata('idUser');
                    $details = array(
                        'utilisateur' => $user,
                        'produit' =>$prod,
                        'tache' => 1
                    );
                    $this->bien->insertDetails($details);
                    $this->uploadFile();
                    redirect('collecte/liste');
                }
            }            
        }

        if(($typebienbati==1 && ($collaboration==4 || $collaboration==6)) || ($typebienbati==2 && ($collaboration==4 || $collaboration==6)) || ($typebienbati==3 && ($collaboration==4 || $collaboration==6)) || ($typebienbati==4 && ($collaboration==4 || $collaboration==6)) || ($typebienbati==5 && ($collaboration==4 || $collaboration==6)) || ($typebienbati==6 && ($collaboration==4 || $collaboration==6)) || ($typebienbati==7 && ($collaboration==4 || $collaboration==6))){
         
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
                'broutep' => $broutep,
                'broute' =>$broute,
                'angle' => $angle,
                'loinmarche' => $loinmarche,
                'presmarche' => $presmarche,
                'loinculte' =>$loinculte,
                'presculte' => $presculte,
                'loinecole' =>$loinecole,
                'presecole' => $presecole,
                'numdossier' => $numdossier
            );
            
            if($prop!=0){
                $prod = $this->bien->saveProduit($datacollecte);
                if($prod!=0){
                    $user = $this->session->userdata('idUser');
                    echo "ok : ".$this->session->userdata('idUser');
                    $details = array(
                        'utilisateur' => $user,
                        'produit' =>$prod,
                        'tache' => 1
                    );
                    $this->bien->insertDetails($details);
                    $this->uploadFile();
                    redirect('collecte/liste');
                }
            }
            
        }

        if(($typebienbati==1 && $collaboration==5) || ($typebienbati==2 &&$collaboration==5) || ($typebienbati==3  &&$collaboration==5) || ($typebienbati==4  &&$collaboration==5) || ($typebienbati==5  &&$collaboration==5) || ($typebienbati==6  &&$collaboration==5) || ($typebienbati==7  &&$collaboration==5)){
           
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
                'broutep' => $broutep,
                'broute' =>$broute,
                'angle' => $angle,
                'loinmarche' => $loinmarche,
                'presmarche' => $presmarche,
                'loinculte' =>$loinculte,
                'presculte' => $presculte,
                'loinecole' =>$loinecole,
                'presecole' => $presecole,
                'numdossier' => $numdossier
            );

            if($prop!=0){
                $prod = $this->bien->saveProduit($datacollecte);
                if($prod!=0){
                    $user = $this->session->userdata('idUser');
                    echo "ok : ".$this->session->userdata('idUser');
                    $details = array(
                        'utilisateur' => $user,
                        'produit' =>$prod,
                        'tache' => 1
                    );
                    $this->bien->insertDetails($details);
                    $this->uploadFile();
                    redirect('collecte/liste');
                }
            }
            
        }

        if(($typebienbati==1 && $collaboration==7) || ($typebienbati==2 && $collaboration==7) || ($typebienbati==3 && $collaboration==7) || ($typebienbati==4 && $collaboration==7) || ($typebienbati==5 && $collaboration==7) || ($typebienbati==6 && $collaboration==7) || ($typebienbati==7 && $collaboration==7)){
            
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
                    'broutep' => $broutep,
                    'broute' =>$broute,
                    'angle' => $angle,
                    'loinmarche' => $loinmarche,
                    'presmarche' => $presmarche,
                    'loinculte' =>$loinculte,
                    'presculte' => $presculte,
                    'loinecole' =>$loinecole,
                    'presecole' => $presecole,
                    'numdossier' => $numdossier
                );
             
                if($prop!=0){
                    $prod = $this->bien->saveProduit($datacollecte);
                    if($prod!=0){
                        $user = $this->session->userdata('idUser');
                        echo "ok : ".$this->session->userdata('idUser');
                        $details = array(
                            'utilisateur' => $user,
                            'produit' =>$prod,
                            'tache' => 1
                        );
                        $this->bien->insertDetails($details);
                      $this->uploadFile();
                      redirect('collecte/liste');
                        
                    }
                }
            
        }

        if(($typebienbati==1 && $collaboration==8) || ($typebienbati==2 && $collaboration==8) || ($typebienbati==3 && $collaboration==8) || ($typebienbati==4 && $collaboration==8) || ($typebienbati==5 && $collaboration==8)  || ($typebienbati==6 && $collaboration==8) || ($typebienbati==7 && $collaboration==8)){
           
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
                    'broutep' => $broutep,
                    'broute' =>$broute,
                    'angle' => $angle,
                    'loinmarche' => $loinmarche,
                    'presmarche' => $presmarche,
                    'loinculte' =>$loinculte,
                    'presculte' => $presculte,
                    'loinecole' =>$loinecole,
                    'presecole' => $presecole,
                    'document' => $_FILES['document']['name']
                );

               
                if($prop!=0){
                    $prod = $this->bien->saveProduit($datacollecte);
                    if($prod!=0){
                        $user = $this->session->userdata('idUser');
                        echo "ok : ".$this->session->userdata('idUser');
                        $details = array(
                            'utilisateur' => $user,
                            'produit' =>$prod,
                            'tache' => 1
                        );
                        $this->bien->insertDetails($details);
                    $this->uploadFile();
                    redirect('collecte/liste');
                    }
                }
        }
        if(($typebienbati==1 && $collaboration==9) || ($typebienbati==2 && $collaboration==9) || ($typebienbati==3 && $collaboration==9) || ($typebienbati==4 && $collaboration==9) || ($typebienbati==5 && $collaboration==9) || ($typebienbati==6 && $collaboration==9) || ($typebienbati==7 && $collaboration==9)){
          
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
                    'broutep' => $broutep,
                    'broute' =>$broute,
                    'angle' => $angle,
                    'loinmarche' => $loinmarche,
                    'presmarche' => $presmarche,
                    'loinculte' =>$loinculte,
                    'presculte' => $presculte,
                    'loinecole' =>$loinecole,
                    'presecole' => $presecole,
                    'document' => $_FILES['document']['name']
                );

               
                if($prop!=0){
                    $prod = $this->bien->saveProduit($datacollecte);
                    if($prod!=0){
                        $user = $this->session->userdata('idUser');
                        echo "ok : ".$this->session->userdata('idUser');
                        $details = array(
                            'utilisateur' => $user,
                            'produit' =>$prod,
                            'tache' => 1
                        );
                        $this->bien->insertDetails($details);
                    $this->uploadFile();
                    redirect('collecte/liste');
                    }
                }
        }
    }

    public function uploadFile(){
        $index = 0;
        $success_count = 0;
        foreach($_FILES['document']['name'] as $key =>  $val){
            $index++;
            //Recuperation de l'extension
            $tmp = explode('.', $_FILES["document"]["name"][$key]);
            $file_ext = end($tmp);

            // Creation du nouveau nom et du chemin
            $id = $this->bien->getMaxidP();
            $new_filename = rand(0,500000).'_document_' . $index . '_'. $id . '.'. $file_ext;
            $path = "upload/". $new_filename;
       
            //Upload
            if(move_uploaded_file($_FILES["document"]["tmp_name"][$key], $path)){
                if($this->bien->setFiles($index,$new_filename,$id)){
                    $success_count++;
                 }    
            };
        }
        if($success_count == 2){
            echo "file uploaded";
        }
    }

    public function download1(){
       if (isset($_GET['numdossier'])) {
            $numdossier = $_GET['numdossier'];
            $file = $this->bien->getDocs($numdossier);
          
            $filepath = 'upload/' . $file->document1;
            if(file_exists($filepath)){
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename=' . basename($filepath));
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize('upload/' . $file->document1));
                readfile('upload/' . $file->document1);
            }

        }
    }

    public function download2(){
        if (isset($_GET['numdossier'])) {
             $numdossier = $_GET['numdossier'];
             $file = $this->bien->getDocs($numdossier);
           
             $filepath = 'upload/' . $file->document2;
             if(file_exists($filepath)){
                 header('Content-Description: File Transfer');
                 header('Content-Type: application/octet-stream');
                 header('Content-Disposition: attachment; filename=' . basename($filepath));
                 header('Expires: 0');
                 header('Cache-Control: must-revalidate');
                 header('Pragma: public');
                 header('Content-Length: ' . filesize('upload/' . $file->document1));
                 readfile('upload/' . $file->document1);
             }
 
         }
     }

    public function details(){
        if (isset($_GET['numdossier'])) {
           $numdossier = $_GET['numdossier'];
           $data = $this->bien->getElemByNumdossier($numdossier);
           echo json_encode($data);
        }
    }

   
    


    
}