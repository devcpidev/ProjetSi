<?php
/**
 * Created by PhpStorm.
 * User: FOLIO
 * Date: 19/03/2019
 * Time: 13:38
 */
class Reception extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('BienDB','bien');
        $this->load->library('session');
        
    }
    //
  
    public function listee()
    {
        $this->load->library('session');

        //restrict users to go to home if not logged in
        if($this->session->userdata('user')){
            $user = $this->session->userdata('idUser');
            $data['collectes'] = $this->bien->collectes();
            $this->load->view('accueil/header.php');
            $this->load->view('collecte/all_collecte',$data);
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
            $config['base_url'] = site_url('/reception/liste/');
            $config['fisrt_link'] ='fisrt';
            $config['last_link'] = 'last';
            $config['total_rows'] = count($this->bien->collectes());
            $config['per_page'] = 8;
            $this->pagination->initialize($config);
            $data['collectes']=$this->bien->findlimit(8,$index);
            $data['link']= $this->pagination->create_links();

            $this->load->view('accueil/header.php');
            $this->load->view('collecte/all_collecte',$data);
            $this->load->view('accueil/footer.php');
        }
        else{
            redirect('/');
        }

    }


    public function download(){
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

    public function details(){
        if (isset($_GET['numdossier'])) {
           $numdossier = $_GET['numdossier'];
           $data = $this->bien->getElemByNumdossier($numdossier);
           echo json_encode($data);
        }
    }

    public function desactiver()
    {
       if(isset($_GET['idproduit'])){
          
           $idproduit = $_GET['idproduit'];
           $data = $this->bien->desactiver( $idproduit);
           redirect('reception/liste');
       }
    }
    
    public function valider()
    {
       if(isset($_GET['idproduit'])){
            $idproduit = $_GET['idproduit'];
           $data = $this->bien->valider( $idproduit);
           redirect('reception/liste');
       }
    }

    
}