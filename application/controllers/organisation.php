<?php
/**
 * Created by PhpStorm.
 * User: FOLIO
 * Date: 19/03/2019
 * Time: 13:38
 */
class Organisation extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserDB','user');
        $this->load->model('cpidepartement','cpidept');
        $this->load->model('departement','dept');
        $this->load->model('bureau','bureau');
        $this->load->model('service','service');
        $this->load->model('zone','zone');
        $this->load->model('region','region');
        $this->load->model('typeproduit','typeproduit');
        $this->load->model('typezone','typezone');
        $this->load->library('session');
        
    }
    //
    public function add()
    {
        
        //restrict users to go to home if not logged in
        if($this->session->userdata('user')){
           
            $this->load->view('accueil/header.php');
            $this->load->view('Service/addservice');
            $this->load->view('accueil/footer.php');
        }
        else{
            redirect('/');
        }
        
     
    
    }
    public function liste()
    {
        
        //restrict users to go to home if not logged in
        if($this->session->userdata('user')){

            $data['cpidepts']=$this->cpidept->listeDepartementCpi();
            $data['depts']=$this->dept->listeDepartement();
            $data['bureaux']=$this->bureau->listeBureau();
            $data['services']=$this->service->listeService();
            $data['zones']=$this->zone->listeZone();
            $data['regions']=$this->region->listeRegion();
            $data['typeproduits']=$this->typeproduit->listeTypeProduit();
            $data['typezones']=$this->typezone->listeTypeZone();
           
            $this->load->view('accueil/header.php');
            $this->load->view('organisation/organisation',$data);
            $this->load->view('accueil/footer.php');
        }
        else{
            redirect('/');
        }
    
    }

    public function saveDeptcpi(){ 
        $result = $this->cpidept->saveCpiDepartement();
        if ($result) {
            $this->session->set_flashdata('success_msg', 'Enregistrement ajouté avec succès');
        }else{
            $this->session->set_flashdata('error_msg', 'Echec enregistrement');
        }
        redirect(base_url('index.php/organisation/liste'));
    }

    public function saveRegion(){ 
        $result = $this->region->saveRegion();
        if ($result) {
            $this->session->set_flashdata('success_msg', 'Enregistrement ajouté avec succès');
        }else{
            $this->session->set_flashdata('error_msg', 'Echec enregistrement');
        }
        redirect(base_url('index.php/organisation/liste'));
    }

    public function saveTypeProduit(){ 
        $result = $this->typeproduit->saveTypeProduit();
        if ($result) {
            $this->session->set_flashdata('success_msg', 'Enregistrement ajouté avec succès');
        }else{
            $this->session->set_flashdata('error_msg', 'Echec enregistrement');
        }
        redirect(base_url('index.php/organisation/liste'));
    }

    public function saveTypeZone(){ 
        $result = $this->typezone->saveTypeZone();
        if ($result) {
            $this->session->set_flashdata('success_msg', 'Enregistrement ajouté avec succès');
        }else{
            $this->session->set_flashdata('error_msg', 'Echec enregistrement');
        }
        redirect(base_url('index.php/organisation/liste'));
    }

    public function saveDepartement(){ 
        $result = $this->dept->saveDepartement();
        if ($result) {
            $this->session->set_flashdata('success_msg', 'Enregistrement ajouté avec succès');
        }else{
            $this->session->set_flashdata('error_msg', 'Echec enregistrement');
        }
        redirect(base_url('index.php/organisation/liste'));
    }

    public function saveService(){ 
        $result = $this->service->saveService();
        if ($result) {
            $this->session->set_flashdata('success_msg', 'Enregistrement ajouté avec succès');
        }else{
            $this->session->set_flashdata('error_msg', 'Echec enregistrement');
        }
        redirect(base_url('index.php/organisation/liste'));
    }

    public function saveBureau(){ 
        $result = $this->bureau->saveBureau();
        if ($result) {
            $this->session->set_flashdata('success_msg', 'Enregistrement ajouté avec succès');
        }else{
            $this->session->set_flashdata('error_msg', 'Echec enregistrement');
        }
        redirect(base_url('index.php/organisation/liste'));
    }

    public function saveZone(){ 
        $result = $this->zone->saveZone();
        if ($result) {
            $this->session->set_flashdata('success_msg', 'Enregistrement ajouté avec succès');
        }else{
            $this->session->set_flashdata('error_msg', 'Echec enregistrement');
        }
        redirect(base_url('index.php/organisation/liste'));
    }

    public function deleteTypeZone($id){
        //echo $id;
        $this->db->where('idTypezone',$id);
        $result = $this->db->delete('typezone');
        if ($result) {
            $this->session->set_flashdata('error_msg', 'Enregistrement supprimé ...');
        }else{
           $this->session->set_flashdata('success_msg', 'Echec lors de la supression'); 
        }
        redirect(base_url('index.php/organisation/liste'));
    }

    public function deleteTypeProduit($id){
        //echo $id;
        $this->db->where('idTypeProduit',$id);
        $result = $this->db->delete('typeproduit');
        if ($result) {
            $this->session->set_flashdata('error_msg', 'Enregistrement supprimé ...');
        }else{
           $this->session->set_flashdata('success_msg', 'Echec lors de la supression'); 
        }
        redirect(base_url('index.php/organisation/liste'));
    }

    public function deleteDepartement($id){
        //echo $id;
        $this->db->where('idDepartement',$id);
        $result = $this->db->delete('departement');
        if ($result) {
            $this->session->set_flashdata('error_msg', 'Enregistrement supprimé ...');
        }else{
           $this->session->set_flashdata('success_msg', 'Echec lors de la supression'); 
        }
        redirect(base_url('index.php/organisation/liste'));
    }

    public function deleteService($id){
        //echo $id;
        $this->db->where('idService',$id);
        $result = $this->db->delete('service');
        if ($result) {
            $this->session->set_flashdata('error_msg', 'Enregistrement supprimé ...');
        }else{
           $this->session->set_flashdata('success_msg', 'Echec lors de la supression'); 
        }
        redirect(base_url('index.php/organisation/liste'));
    }

    public function deleteZone($id){
        //echo $id;
        $this->db->where('idZone',$id);
        $result = $this->db->delete('zone');
        if ($result) {
            $this->session->set_flashdata('error_msg', 'Enregistrement supprimé ...');
        }else{
           $this->session->set_flashdata('success_msg', 'Echec lors de la supression'); 
        }
        redirect(base_url('index.php/organisation/liste'));
    }

    public function deleteRegion($id){
        //echo $id;
        $this->db->where('idRegion',$id);
        $result = $this->db->delete('region');
        if ($result) {
            $this->session->set_flashdata('error_msg', 'Enregistrement supprimé ...');
        }else{
           $this->session->set_flashdata('success_msg', 'Echec lors de la supression'); 
        }
        redirect(base_url('index.php/organisation/liste'));
    }

    public function deleteBureau($id){
        //echo $id;
        $this->db->where('idBureau',$id);
        $result = $this->db->delete('bureau');
        if ($result) {
            $this->session->set_flashdata('error_msg', 'Enregistrement supprimé ...');
        }else{
           $this->session->set_flashdata('success_msg', 'Echec lors de la supression'); 
        }
        redirect(base_url('index.php/organisation/liste'));
    }

    public function deleteDeptCpi($id){
        //echo $id;
        $this->db->where('idDept',$id);
        $result = $this->db->delete('cpidepartement');
        if ($result) {
            $this->session->set_flashdata('error_msg', 'Enregistrement supprimé ...');
        }else{
           $this->session->set_flashdata('success_msg', 'Echec lors de la supression'); 
        }
        redirect(base_url('index.php/organisation/liste'));
    }
    
}
