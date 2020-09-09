<?php
require ('AdherentDAO.php');
$adh = new AdherentDAO();



/*
$ar_adherent = array();
//Requete sur la table mcmp_page :
$req_adherent = $bdd->prepare('SELECT IdAdherent, Nom, Prenom, Organisateur, Password, Login FROM adherent WHERE Login = :log');
$req_adherent->execute(array(
    'log' => $_POST['Login'],
));
$resultat_adherentExist = $req_adherent->fetch();
if (!$resultat_adherentExist){
    $messageAdmin_FormMember = "Poursuivre ...";
}
else{
    $messageAdmin_FormMember = "Login déjà utilisé par un membre" ;
}
$daoAherent = new AdherentDAO($bdd);
$adherent = $daoAherent->findByLogin($_POST['login']);

$adherent->prenom ="toto";
$daoAherent->update($adherent);
*/

/*
class AdherentDAO {
    private $_bdd;
    public  function __construct($bdd)
    {
        $_bdd = $bdd;
    }

    function find($page, $offset) {
        var $adherents = Array();
        //requete
        return $adherents;
    }

    function findById($id) {
        var $adherent = null;
        //requete
        return $adherent;
    }

    function findByEmail($email) {
        var $adherent = null;
        //requete
        return $adherent;
    }

    public function findByLogin($login) : Adherent {
        $req_adherent = $this->$_bdd->prepare('SELECT IdAdherent, Nom, Prenom, Organisateur, Password, Login FROM adherent WHERE Login = :log');
        $req_adherent->execute(array(
            'log' => $login,
        ));
        $res =   $req_adherent->fetch();
        //construct Adherent
        return new Adherent($res);
    }

    function create(Adherent $adherent){
        var $adherent = null;
        //requete insert
        return $adherent;
    }

    function update($adherent){
        var $adherent = null;
        //requete update
        return $adherent;
    }

    function delete($id) {
        var $adherent = null;
        //requete delete
        return $adherent;
    }
}

class Adherent {
    public int $id;
    public string $nom;
    public string $prenom;
    public string $bornDate;
    public int $idPhoto;
    public int $idRole;

    public function __construct(Array $adherent=null)
    {
        if($adherent != null) {
            $id = $adherent['idAdherent'];
            $nom = $adherent['Nom'];
            $bornDate = $adherent['DNaiss'];
            $prenom = $adherent['Prenom'];
            $idPhoto = $adherent['IdPhoto'];
            $idRole = $adherent['IdRole'];
        }
    }
}
*/