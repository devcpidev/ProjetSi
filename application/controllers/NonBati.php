<?php


class NonBati extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('BienDB','bien');
		$this->load->model('ProprietaireDB','prop');
		$this->load->library('session');

	}
	public function listee()
	{
		$this->load->library('session');

		//restrict users to go to home if not logged in
		if($this->session->userdata('user')){
			$user = $this->session->userdata('idUser');
			$data['infos'] = $this->bien->mesCollectesnonbati($user);
			//$data['collectes'] = $this->bien->collectes();
			$this->load->view('accueil/header.php');
			$this->load->view('collecte/listebienNonBati',$data);
			$this->load->view('accueil/footer.php');
		}
		else{
			redirect('/');
		}
	}
	//
	public function liste($index=0)
	{
		$this->load->library('session');

		if($this->session->userdata('user')){
			$this->load->library('pagination');
			$user = $this->session->userdata('idUser');
			$config['base_url'] = site_url('/NonBati/liste/');
			$config['fisrt_link'] ='fisrt';
			$config['last_link'] = 'last';
			$config['total_rows'] = count($this->bien->mesCollectesnonbati($user));
			$config['per_page'] = 8;
			$this->pagination->initialize($config);
			$data['infos']=$this->bien->findlimit2(8,$index);
			$data['link']= $this->pagination->create_links();

			$this->load->view('accueil/header.php');
			$this->load->view('collecte/listebienNonBati',$data);
			$this->load->view('accueil/footer.php');
		}
		else{
			redirect('/');
		}

	}

	public function BienNonBati()
	{
		$data['zone'] = $this->bien->zone();
		$data['type'] = $this->bien->bienNonBati();
		$data['services'] = $this->bien->services();
		$this->load->view('accueil/header.php');
		$this->load->view('collecte/collecte_bien_non_bati',$data);
		$this->load->view('accueil/footer.php');
	}
	public function save()
	{
		$this->load->library('session');
		//recuperation des données du propriétaire
		$nom = $this->input->post('nom');
		$prenom = $this->input->post('prenom');
		$tel = $this->input->post('tel');
		$email = $this->input->post('email');
		$adressesen = $this->input->post('adressesen');
		$nomrep = $this->input->post('nomrep');
		$telrep = $this->input->post('telrep');
		$emailrep = $this->input->post('emailrep');
		$adresserep = $this->input->post('adresserep');
		//Recupération des champs input de la collecte
		$adresse = $this->input->post('adresse');
		$nature = $this->input->post('nature');
		$positionnement = $this->input->post('positionnement');
		$typebiennonbati = $this->input->post('typebiennonbati');
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
		$surface = $this->input->post('surface');
		$services = $this->input->post('typeservices');
		$titreprop = $this->input->post('titreprop');
		$cnibailleur = $this->input->post('cnibailleur');
		$autresdoc = $this->input->post('autresdoc');
		$plansite = $this->input->post('plansite');
		$autreselemproc = $this->input->post('autreselemproc');
		$planelec = $this->input->post('planelec');

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
		$cditem = $this->input->post('cditem');
		$timbrevar = $this->input->post('timbrevar');
		$preuverealpeine = $this->input->post('preuverealpeine');
		$plangeometre = $this->input->post('plangeometre');
		$programimetat = $this->input->post('programimetat');
		$demandebailrec = $this->input->post('demandebailrec');
		$delibcommune = $this->input->post('delibcommune');
		$exemplaires = $this->input->post('exemplaires');
		$broutep = $this->input->post('broutep');
		$broute = $this->input->post('broute');
		$angle = $this->input->post('angle');
		$loinmarche = $this->input->post('loinmarche');
		$presmarche = $this->input->post('presmarche');
		$loinculte = $this->input->post('loinculte');
		$presculte = $this->input->post('presculte');
		$loinecole = $this->input->post('loinecole');
		$presecole = $this->input->post('presecole');



		$dataproprietaire = array(
			'nom' => $nom,
			'prenom' => $prenom,
			'tel' => $tel,
			'email' => $email,
			'adressesen' => $adressesen,
			'nomrep' => $nomrep,
			'telrep' => $telrep,
			'emailrep' => $emailrep,
			'adresserep' => $adresserep
		);

		$datadocservice = array(
		'etatdroitreel' => $etatdroitreel,
			'actedevente' => $actedevente,
			'autorisationcons'=> $autorisationcons,
			'planbetonarme' => $planbetonarme,
		'servicebiennonbati' => $services,
		'planarchi' => $planarchi,
		'planindividuelap' => $planindividuelap,
			'autorisationbail'=> $autorisationbail ,
		'deliberationind' => $deliberationind,
		'attestbail' => $attestbail,
		'cnibailleur' => $cnibailleur,
		'autresdoc' =>$autresdoc,
		'plansite' =>$plansite,
		'autreselemproc' => $autreselemproc,
		'planelec' => $planelec,

		'cahierdesctechnique' => $cahierdesctechnique,
		'fichinsctechnique' => $fichinsctechnique,
		'etudefinancement' => $etudefinancement,
		'demandeautmaire' => $demandeautmaire,

		'autdemolir' => $autdemolir,
		'plansituation' => $plansituation,
		'ficherenseign' => $ficherenseign,
		'devisestim' => $devisestim,
		'taxesmunicip' => $taxesmunicip,
		'taxesurbanism' => $taxesurbanism,
		'timbrefisc' => $timbrefisc,
		'enveloppe' => $enveloppe,
		'demandeminurb' => $demandeminurb,
		'cahiercharge' => $cahiercharge,
		'rapportpres' => $rapportpres,
		'planmorcel' =>$planmorcel,
		'cdnum' => $cdnum,
		'cditem' => $cditem,
		'timbrevar' => $timbrevar,
		'preuverealpeine' => $preuverealpeine,
		'plangeometre' => $plangeometre,
		'programimetat' => $programimetat,
		'demandebailrec' => $demandebailrec,
		'delibcommune' => $delibcommune,
		'exemplaires' => $exemplaires,





	);
		//upload file configuration

		$config['upload_path'] = 'upload';
		$config['allowed_types'] = 'gif|jpg|png|pdf';
		$config['max_size'] = 1000;
		$config['max_width'] = 10240;
		$config['max_height'] = 7680;
		$this->load->library('upload', $config);

		// fin

		//création du numero de dossier
		$numdossier= "";
        $profil = $this->session->userdata('profil');
      
        if($profil==2){
            echo "fff".$profil;
            $max =  $this->bien->getMaxidP();
            $date = date("Y-d");
            $numdossier = "ZU"."-".$date."".$max."-"."P";
            echo $numdossier;
        }
        
        if($profil==3){
            $max =  $this->bien->getMaxidP();
            $date = date("Y-d");
            $numdossier = "ZPU"."-".$date."".$max."-"."P";
            
        }
    // echo "yes".$this->session->userdata('idUser');
		//echo "gg".$typebiennonbati;
		if (($typebiennonbati == 1 && $services == 1) || ($typebiennonbati == 2 && $services == 1) || ($typebiennonbati == 3 && $services == 1) || ($typebiennonbati == 4 && $services == 1) || ($typebiennonbati == 5 && $services == 1)) {

			// echo "yes".$numdossier;
			//insertion du proprietaire
			$prop = $this->bien->addProprietaire($dataproprietaire);
			$doc = $this->bien->addDocument($datadocservice);


			$datacollecte = array(
				'adresse' => $adresse,
				'nature' => $nature,

				'zone' => $zone,
				'surface'=>$surface,
				'typeservices' => $services,
				'proprietaire' => $prop,

				'broutep' => $broutep,
				'broute' => $broute,
				'angle' => $angle,
				'loinmarche' => $loinmarche,
				'presmarche' => $presmarche,
				'loinculte' => $loinculte,
				'presculte' => $presculte,
				'loinecole' => $loinecole,
				'presecole' => $presecole,
				'numdossier' => $numdossier,
				'typebiennonbati' => 	$typebiennonbati

			);
			if ($prop != 0) {
				$prod = $this->bien->saveProduit($datacollecte);
				if ($prod != 0) {
					$user = $this->session->userdata('idUser');
					echo "ok : " . $this->session->userdata('idUser');
					$details = array(
						'utilisateur' => $user,
						'produit' => $prod,
						'tache' => 1
					);
					$this->bien->insertDetails($details);
					$this->uploadFile();
					redirect('NonBati/liste');
				}
			}

		}else{

		}
		if (($typebiennonbati == 1 && ($services == 2 || $services == 4 || $services == 6)) || ($typebiennonbati == 2 && ($services == 2 || $services == 4 || $services == 6)) || ($typebiennonbati == 3 && ($services == 2 || $services == 4 || $services == 6)) || ($typebiennonbati == 4 && ($services == 2 || $services == 4 || $services == 6)) || ($typebiennonbati == 5 && ($services == 2 || $services == 4 || $services == 6))) {

			//insertion du proprietaire
			$prop = $this->bien->addProprietaire($dataproprietaire);

			$datacollecte = array(
				'adresse' => $adresse,
				'nature' => $nature,
				'typebiennonbati' => $typebiennonbati,

				'zone' => $zone,
				'typeservices' => $services,
				'proprietaire' => $prop,
				'titreprop' => $titreprop,

				'broutep' => $broutep,
				'broute' => $broute,
				'angle' => $angle,
				'loinmarche' => $loinmarche,
				'presmarche' => $presmarche,
				'surface' => $surface,
				'loinculte' => $loinculte,
				'presculte' => $presculte,
				'loinecole' => $loinecole,
				'presecole' => $presecole,
				'numdossier' => $numdossier
			);

			if ($prop != 0) {
				$prod = $this->bien->saveProduit($datacollecte);
				if ($prod != 0) {
					$user = $this->session->userdata('idUser');
					echo "ok : " . $this->session->userdata('idUser');
					$details = array(
						'utilisateur' => $user,
						'produit' => $prod,
						'tache' => 1
					);
					$this->bien->insertDetails($details);
					$this->uploadFile();
					redirect('NonBati/liste');
				}
			}

		}
		if (($typebiennonbati == 1 && ($services == 7 || $services == 8 || $services == 9 || $services == 10 || $services == 11 || $services == 12 || $services == 13 || $services == 14 || $services == 15 || $services == 16 || $services == 17 || $services == 20 || $services == 21 || $services == 22 || $services == 24 || $services == 25 || $services == 26 || $services == 27)) || ($typebiennonbati == 2 && ($services == 7 || $services == 8 || $services == 9 || $services == 10 || $services == 11 || $services == 12 || $services == 13 || $services == 14 || $services == 15 || $services == 16 || $services == 17 || $services == 20 || $services == 21 || $services == 22 || $services == 24 || $services == 25 || $services == 26 || $services == 27)) || ($typebiennonbati == 3 && ($services == 7 || $services == 8 || $services == 9 || $services == 10 || $services == 11 || $services == 12 || $services == 13 || $services == 14 || $services == 15 || $services == 16 || $services == 17 || $services == 20 || $services == 21 || $services == 22 || $services == 24 || $services == 25 || $services == 26 || $services == 27)) || ($typebiennonbati == 4 && ($services == 7 || $services == 8 || $services == 9 || $services == 10 || $services == 11 || $services == 12 || $services == 13 || $services == 14 || $services == 15 || $services == 16 || $services == 17 || $services == 20 || $services == 21 || $services == 22 || $services == 24 || $services == 25 || $services == 26 || $services == 27)) || ($typebiennonbati == 5 && ($services == 7 || $services == 8 || $services == 9 || $services == 10 || $services == 11 || $services == 12 || $services == 13 || $services == 14 || $services == 15 || $services == 16 || $services == 17 || $services == 20 || $services == 21 || $services == 22 || $services == 24 || $services == 25 || $services == 26 || $services == 27))) {

			//insertion du proprietaire
			$prop = $this->bien->addProprietaire($dataproprietaire);
			$doc = $this->bien->addDocument($datadocservice);

			$datacollecte = array(
				'adresse' => $adresse,
				'nature' => $nature,
				'zone' => $zone,
				'typeservices' => $services,
				'proprietaire' => $prop,
				'titreprop' => $titreprop,
				'broutep' => $broutep,
				'broute' => $broute,
				'angle' => $angle,
				'loinmarche' => $loinmarche,
				'presmarche' => $presmarche,
				'loinculte' => $loinculte,
				'presculte' => $presculte,
				'loinecole' => $loinecole,
				'presecole' => $presecole,
				'numdossier' => $numdossier,
				'typebiennonbati' => 	$typebiennonbati
			);

			if ($prop != 0) {
				$prod = $this->bien->saveProduit($datacollecte);
				if ($prod != 0) {
					$user = $this->session->userdata('idUser');
					echo "ok : " . $this->session->userdata('idUser');
					$details = array(
						'utilisateur' => $user,
						'produit' => $prod,
						'tache' => 1
					);
					$this->bien->insertDetails($details);
					$this->uploadFile();
					redirect('NonBati/liste');
				}
			}

		}


		if (($typebiennonbati == 1 && ($services == 18 || $services == 23)) || ($typebiennonbati == 2 && ($services == 18 || $services == 23)) || ($typebiennonbati == 3 && ($services == 18 || $services == 23)) || ($typebiennonbati == 4 && ($services == 18 || $services == 23)) || ($typebiennonbati == 5 && ($services == 18 || $services == 23))) {

			//insertion du proprietaire
			$prop = $this->bien->addProprietaire($dataproprietaire);

			$datacollecte = array(
				'adresse' => $adresse,
				'nature' => $nature,
				'typebiennonbati' => 	$typebiennonbati,
				'zone' => $zone,
				'surface' => $surface,
				'typeservices' => $services,
				'proprietaire' => $prop,
				'titreprop' => $titreprop,
				'broutep' => $broutep,
				'broute' => $broute,
				'angle' => $angle,
				'loinmarche' => $loinmarche,
				'presmarche' => $presmarche,
				'loinculte' => $loinculte,
				'presculte' => $presculte,
				'loinecole' => $loinecole,
				'presecole' => $presecole,
				'numdossier' => $numdossier
			);

			if ($prop != 0) {
				$prod = $this->bien->saveProduit($datacollecte);
				if ($prod != 0) {
					$user = $this->session->userdata('idUser');
					echo "ok : " . $this->session->userdata('idUser');
					$details = array(
						'utilisateur' => $user,
						'produit' => $prod,
						'tache' => 1
					);
					$this->bien->insertDetails($details);
					$this->uploadFile();
					redirect('NonBati/liste');
				}
			}

		}

		if (($typebiennonbati == 1 && ($services == 28 || $services == 33)) || ($typebiennonbati == 2 && ($services == 28 || $services == 33)) || ($typebiennonbati == 3 && ($services == 28 || $services == 33)) || ($typebiennonbati == 4 && ($services == 28 || $services == 33)) || ($typebiennonbati == 5 && ($services == 28 || $services == 33))) {

			//insertion du proprietaire
			$prop = $this->bien->addProprietaire($dataproprietaire);

			$datacollecte = array(
				'adresse' => $adresse,
				'nature' => $nature,
				'typebiennonbati' => $typebiennonbati,
				'etatdroitreel' => $etatdroitreel,
				'zone' => $zone,
				'typeservices' => $services,
				'surface' =>$surface,
				'proprietaire' => $prop,
				'titreprop' => $titreprop,
				'broutep' => $broutep,
				'broute' => $broute,
				'angle' => $angle,
				'loinmarche' => $loinmarche,
				'presmarche' => $presmarche,
				'loinculte' => $loinculte,
				'presculte' => $presculte,
				'loinecole' => $loinecole,
				'presecole' => $presecole,
				'numdossier' => $numdossier
			);

			if ($prop != 0) {
				$prod = $this->bien->saveProduit($datacollecte);
				if ($prod != 0) {
					$user = $this->session->userdata('idUser');
					echo "ok : " . $this->session->userdata('idUser');
					$details = array(
						'utilisateur' => $user,
						'produit' => $prod,
						'tache' => 1
					);
					$this->bien->insertDetails($details);
					$this->uploadFile();
					redirect('NonBati/liste');

				}
			}

		}


		if (($typebiennonbati == 1 && $services == 3) || ($typebiennonbati == 2 && $services == 3) || ($typebiennonbati == 3 && $services == 3) || ($typebiennonbati == 4 && $services == 3) || ($typebiennonbati == 5 && $services == 3)) {

			//insertion du proprietaire
			$prop = $this->bien->addProprietaire($dataproprietaire);

			$datacollecte = array(
				'adresse' => $adresse,
				'nature' => $nature,
				'surface' => $surface,
				'zone' => $zone,
				'typeservices' => $services,
				'proprietaire' => $prop,
				'titreprop' => $titreprop,
				'autresdoc' => $autresdoc,
				'jeuxcons' => $jeuxcons,
				'typebiennonbati' => 	$typebiennonbati,
				'broutep' => $broutep,
				'broute' => $broute,
				'angle' => $angle,
				'loinmarche' => $loinmarche,
				'presmarche' => $presmarche,
				'loinculte' => $loinculte,
				'presculte' => $presculte,
				'loinecole' => $loinecole,
				'presecole' => $presecole,
				'document' => $_FILES['document']['name']
			);


			if ($prop != 0) {
				$prod = $this->bien->saveProduit($datacollecte);
				if ($prod != 0) {
					$user = $this->session->userdata('idUser');
					echo "ok : " . $this->session->userdata('idUser');
					$details = array(
						'utilisateur' => $user,
						'produit' => $prod,
						'tache' => 1
					);
					$this->bien->insertDetails($details);
					$this->uploadFile();
					redirect('NonBati/liste');
				}
			}
		}
		if (($typebiennonbati == 1 && $services == 5) || ($typebiennonbati == 2 && $services == 5) || ($typebiennonbati == 3 && $services == 5) || ($typebiennonbati == 4 && $services == 5)) {

			//insertion du proprietaire
			$prop = $this->bien->addProprietaire($dataproprietaire);

			$datacollecte = array(
				'adresse' => $adresse,
				'nature' => $nature,


				'zone' => $zone,
				'surface' => $surface,
				'typeservices' => $services,
				'proprietaire' => $prop,
				'titreprop' => $titreprop,
				'typebiennonbati' => 	$typebiennonbati,
				'broutep' => $broutep,
				'broute' => $broute,
				'angle' => $angle,
				'loinmarche' => $loinmarche,
				'presmarche' => $presmarche,
				'loinculte' => $loinculte,
				'presculte' => $presculte,
				'loinecole' => $loinecole,
				'presecole' => $presecole,
				'document' => $_FILES['document']['name']
			);


			if ($prop != 0) {
				$prod = $this->bien->saveProduit($datacollecte);
				if ($prod != 0) {
					$user = $this->session->userdata('idUser');
					echo "ok : " . $this->session->userdata('idUser');
					$details = array(
						'utilisateur' => $user,
						'produit' => $prod,
						'tache' => 1
					);
					$this->bien->insertDetails($details);
					$this->uploadFile();
					redirect('collecte/listebienNonBati');
				}
			}
		}

		if (($typebiennonbati == 1 && $services == 31) || ($typebiennonbati == 2 && $services == 31) || ($typebiennonbati == 3 && $services == 31) || ($typebiennonbati == 4 && $services == 31) || ($typebiennonbati == 5 && $services == 31)) {

			//insertion du proprietaire
			$prop = $this->bien->addProprietaire($dataproprietaire);

			$datacollecte = array(
				'adresse' => $adresse,
				'nature' => $nature,
				'typebiennonbati' => $typebiennonbati,
				'zone' => $zone,
				'typeservices' => $services,
				'proprietaire' => $prop,
				'titreprop' => $titreprop,
				'autresdoc' => $autresdoc,
				'surface' => $surface,
				'broutep' => $broutep,
				'broute' => $broute,
				'angle' => $angle,
				'loinmarche' => $loinmarche,
				'presmarche' => $presmarche,
				'loinculte' => $loinculte,
				'presculte' => $presculte,
				'loinecole' => $loinecole,
				'presecole' => $presecole,
				'document' => $_FILES['document']['name']
			);


			if ($prop != 0) {
				$prod = $this->bien->saveProduit($datacollecte);
				if ($prod != 0) {
					$user = $this->session->userdata('idUser');
					echo "ok : " . $this->session->userdata('idUser');
					$details = array(
						'utilisateur' => $user,
						'produit' => $prod,
						'tache' => 1
					);
					$this->bien->insertDetails($details);
					$this->uploadFile();
					redirect('NonBati/liste');
				}
			}
		}
		if (($typebiennonbati == 1 && $services == 32) || ($typebiennonbati == 2 && $services == 32) || ($typebiennonbati == 3 && $services == 32) || ($typebiennonbati == 4 && $services == 32) || ($typebiennonbati == 5 && $services == 32)) {

			//insertion du proprietaire
			$prop = $this->bien->addProprietaire($dataproprietaire);

			$datacollecte = array(
				'adresse' => $adresse,
				'nature' => $nature,

				'typebiennonbati' => $typebiennonbati,

				'typeservices' => $services,
				'proprietaire' => $prop,
				'titreprop' => $titreprop,
				'jeuxcons' => $jeuxcons,


				'broutep' => $broutep,
				'broute' => $broute,
				'angle' => $angle,
				'loinmarche' => $loinmarche,
				'presmarche' => $presmarche,
				'loinculte' => $loinculte,
				'presculte' => $presculte,
				'loinecole' => $loinecole,
				'presecole' => $presecole,
				'document' => $_FILES['document']['name']
			);


			if ($prop != 0) {
				$prod = $this->bien->saveProduit($datacollecte);
				if ($prod != 0) {
					$user = $this->session->userdata('idUser');
					echo "ok : " . $this->session->userdata('idUser');
					$details = array(
						'utilisateur' => $user,
						'produit' => $prod,
						'tache' => 1
					);
					$this->bien->insertDetails($details);
					$this->uploadFile();
					redirect('NonBati/liste');
				}
			}
		}
		if (($typebiennonbati == 1 && $services == 34) || ($typebiennonbati == 2 && $services == 34) || ($typebiennonbati == 3 && $services == 34) || ($typebiennonbati == 4 && $services == 34) || ($typebiennonbati == 5 && $services == 34)) {

			//insertion du proprietaire
			$prop = $this->bien->addProprietaire($dataproprietaire);

			$datacollecte = array(
				'adresse' => $adresse,
				'nature' => $nature,

				'typebiennonbati' => $typebiennonbati,

				'typeservices' => $services,
				'proprietaire' => $prop,
				'titreprop' => $titreprop,
				'jeuxcons' => $jeuxcons,
				'broutep' => $broutep,
				'broute' => $broute,
				'angle' => $angle,
				'loinmarche' => $loinmarche,
				'presmarche' => $presmarche,
				'loinculte' => $loinculte,
				'presculte' => $presculte,
				'loinecole' => $loinecole,
				'presecole' => $presecole,
				'document' => $_FILES['document']['name']
			);


			if ($prop != 0) {
				$prod = $this->bien->saveProduit($datacollecte);
				if ($prod != 0) {
					$user = $this->session->userdata('idUser');
					echo "ok : " . $this->session->userdata('idUser');
					$details = array(
						'utilisateur' => $user,
						'produit' => $prod,
						'tache' => 1
					);
					$this->bien->insertDetails($details);
					$this->uploadFile();
					redirect('NonBati/liste');
				}
			}

		}
	}
		public function uploadFile()
		{
			$index = 0;
			$success_count = 0;
			foreach ($_FILES['document']['name'] as $key => $val) {
				$index++;
				//Recuperation de l'extension
				$tmp = explode('.', $_FILES["document"]["name"][$key]);
				$file_ext = end($tmp);

				// Creation du nouveau nom et du chemin
				$id = $this->bien->getMaxidP();
				$new_filename = rand(0, 500000) . '_document_' . $index . '_' . $id . '.' . $file_ext;
				$path = "upload/" . $new_filename;

				//Upload
				if (move_uploaded_file($_FILES["document"]["tmp_name"][$key], $path)) {
					if ($this->bien->setFiles($index, $new_filename, $id)) {
						$success_count++;
					}
				};
			}
			if ($success_count == 2) {
				echo "file uploaded";
			}

	}

	public function download1()
	{
		if (isset($_GET['numdossier'])) {
			$numdossier = $_GET['numdossier'];
			$file = $this->bien->getDocs($numdossier);

			$filepath = 'upload/' . $file->document1;
			if (file_exists($filepath)) {
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

	public function prop(){
		if (isset($_GET['numdossier'])) {
			$numdossier = $_GET['numdossier'];
			$data = $this->prop->getNonbatiProp($numdossier);
			echo json_encode($data);
		}
	}







}
