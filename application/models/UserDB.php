<?php
class UserDB extends  CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function checkUser($email,$password){
        $this->db->select('*');
        $this->db->from('user_profil');
        $this->db->where('email', $email);
        $result = $this->db->get();
        if($password == $result->row()->password)
            return $result->row();
        else
            return false;


    }
    public function adduser($data)
    {
        $this->db->insert('utilisateur',$data);
        return $this->db->insert_id();
    }

    public function getTable(){
        return 'utilisateur';
    }
    public function getUserProfil(){
        return 'user_profil';
    }
    public function findlimit($limit,$row){

        return $this->db->get('utilisateur',$limit,$row)->result();
    }



    public function deleteuser($id){
        $this->db->where('id',$id);
        $this->db->delete('utilisateur');
    }

    public function Updateuser($id,$data)
    {
        $this->db->where('id',$id);
        $this->db->update('utilisateur',$data);

        $datas = array(
            'idUser' => $id,
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'tel' => $data['tel'],
            'adresse' => $data['adresse'],
            'email' => $data['email'],
            'password' => $data['password'],
            'etat' => $data['etat'],
            'profil' => $data['profil']

        );
        return $datas;
    }
    public function listeuser()
    {
        return $this->db->select("*")
            ->from($this->getUserProfil())
            ->get()
            ->result();
    }
    public function getuserByid($id){
        $this->db->select('*');
        $this->db->from('utilisateur');
        $this->db->where('idUser = ',$id);
        $query = $this->db->get();
        return $query->result();
    }
    public function Activer($id,$data)
    {
        $this->db->where('idUser',$id);
        $this->db->update('utilisateur',$data);

    }
    public function Desactiver($id,$data)
    {
        $this->db->where('idUser',$id);
        $this->db->update('utilisateur',$data);

    }
}