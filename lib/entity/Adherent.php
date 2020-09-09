<?php
class Adherent
{
    private $_id ;
    private $_nom ;
    private $_prenom ;
    private $_bornDate ;
    private $_addr1 ;
    private $_cdpost ;
    private $_ville ;
    private $_email ;
    private $_tel;
    private $_dadhesion ;
    private $_login ;
    private $_password ;
    private $_idPhoto ;
    private $_idRole ;

    public function __construct(Array $data)
    {
        $this->hydrate($data);
    }
    public function hydrate(Array $data)
    {
        foreach ($data as $key => $value){
            $methode = 'set'.ucfirst($key);
            if(method_exists($this, $methode)){
                $this->$methode($value);
            }
        }
    }
    //TODO : Une List de Getters
    public function getId()
    {
        return $this->_id;
    }
    public function getNom()
    {
        return $this->_nom;
    }
    public function getPrenom()
    {
        return $this->_prenom;
    }
    public function getBornDate()
    {
        return $this->_bornDate;
    }
    public function getAddr1()
    {
        return $this->_addr1;
    }
    public function getCdpost()
    {
        return $this->_cdpost;
    }
    public function getVille()
    {
        return $this->_ville;
    }
    public function getEmail()
    {
        return $this->_email;
    }
    public function getTel()
    {
        return $this->_tel;
    }
    public function getDadhesion()
    {
        return $this->_dadhesion;
    }
    public function getLogin()
    {
        return $this->_login;
    }
    public function getPassword()
    {
        return $this->_password;
    }
    public function getIdPhoto()
    {
        return $this->_idPhoto;
    }
    public function getIdRole()
    {
        return $this->_idRole;
    }
    //TODO : Une List de Setters
    public function setId($id): void
    {
        $this->_id = $id;
    }
    public function setNom($nom): void
    {
        $this->_nom = $nom;
    }
    public function setPrenom($prenom): void
    {
        $this->_prenom = $prenom;
    }
    public function setBornDate($bornDate): void
    {
        $this->_bornDate = $bornDate;
    }
    public function setAddr1($addr1): void
    {
        $this->_addr1 = $addr1;
    }
    public function setCdpost($cdpost): void
    {
        $this->_cdpost = $cdpost;
    }
    public function setVille($ville): void
    {
        $this->_ville = $ville;
    }
    public function setEmail($email): void
    {
        $this->_email = $email;
    }
    public function setTel($tel): void
    {
        $this->_tel = $tel;
    }
    public function setDadhesion($dadhesion): void
    {
        $this->_dadhesion = $dadhesion;
    }
    public function setLogin($login): void
    {
        $this->_login = $login;
    }
    public function setPassword($password): void
    {
        $this->_password = $password;
    }
    public function setIdPhoto($idPhoto): void
    {
        $this->_idPhoto = $idPhoto;
    }
    public function setIdRole($idRole): void
    {
        $this->_idRole = $idRole;
    }
}