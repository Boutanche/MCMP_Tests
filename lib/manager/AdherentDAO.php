<?php
require_once './lib/entity/Adherent.php';
//include './config/config.php';

class AdherentDAO
{
    //Instance de PDO :
    private $_bdd;

    public  function __construct($bdd)
    {
        $this->setBdd($bdd);
    }
    public function add(Adherent $adherent){

        //Preparation de la requête d'insertion :
        $req_InsertAdh = $this->_bdd->prepare('INSERT INTO mcmp_adherent (Nom, Prenom, DNaiss, Addr1, CdPost, Ville, Email, DAdhesion, Login, Password, IdRole)
                                                VALUES(:nom, :prenom, :dnaiss, :addr1, :cdpost, :ville, :email, :dadhesion, :login, :password, :idrole)');
        //requete insert
        $req_InsertAdh->bindValue(':nom', $adherent->getNom());
        $req_InsertAdh->bindValue(':prenom', $adherent->getPrenom());
        $req_InsertAdh->bindValue(':dnaiss', $adherent->getBornDate());
        $req_InsertAdh->bindValue(':addr1', $adherent->getAddr1());
        $req_InsertAdh->bindValue(':cdpost', $adherent->getCdpost());
        $req_InsertAdh->bindValue(':ville', $adherent->getVille());
        $req_InsertAdh->bindValue(':email', $adherent->getEmail());
        $req_InsertAdh->bindValue(':dadhesion', $adherent->getDadhesion());
        $req_InsertAdh->bindValue(':login', $adherent->getLogin());
        $req_InsertAdh->bindValue(':password', $adherent->getPassword());
        $req_InsertAdh->bindValue(':idrole', $adherent->getEmail());
        return $adherent;
    }
    public function delete(Adherent $adherent){
        //Exécuter un delete sur un Adhérent :
        $this->_bdd->exec('DELETE FROM mcmp_adherent WHERE IdAdherent = '.$adherent->getId());
    }
    public function getByID($id){
        //Exécuter un select avec une clause WHERE et return l'adhérent SELECT :
    }

    function findAll_Adh($_bdd){
        $adherents = Array();
        $req_allAdherents = $_bdd->prepare('SELECT * FROM mcmp_adherent');
        while ($data = $req_allAdherents->fetch(PDO::FETCH_ASSOC)){
            $adherents = new Adherent($data);
        }
        return $adherents;
    }
    function findByLogin($login, $bdd){
        $_bdd = $bdd;
        $req_adherent = $this->$_bdd->prepare('SELECT * FROM mcmp_adherent WHERE Login = :log');
        $req_adherent->execute(array(
            'log' => $login,
        ));
        $res =   $req_adherent->fetch();
        //construct Adherent
        $testAdherent = new Adherent($res);
        return $testAdherent;
    }
    function create(Adherent $adherent){
        $adherent = null;
        //requete insert
        return $adherent;
    }

    function update($adherent){
        $adherent = null;
        //requete update
        return $adherent;
    }
    function findById($id) {
        $adherent = null;
        //requete
        return $adherent;
    }
    function findByEmail($email) {
        $adherent = null;
        //requete
        return $adherent;
    }
    public function setBdd(PDO $bdd){
        $this->_bdd = $bdd;
    }
}