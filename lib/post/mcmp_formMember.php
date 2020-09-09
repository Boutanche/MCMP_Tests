<?php
require_once './lib/manager/AdherentDAO.php';


if(empty($_POST["nom"]) || empty($_POST["prenom"])){
    $messageAdmin_FormMember = 'Vous devez saisir un nom et un prénom';
}else {
    var_dump($_POST);
    //TODO : Vérifier unicité du login
    if (isset($_POST["Login"])){
        //çça doit pas être ça.
        //$daoAherent->findByLogin($_POST["Login"],$bdd);
        $message_modal_admin = "Login_ OK ";
        //TODO : vérifier validiter du password
        if(isset($_POST['user_password'])){
            $adherent = new Adherent;
            $adherent->hydrate([
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom']
            ]);
            var_dump($adherent);
            $daoAdherent = new AdherentDAO($bdd);
            $daoAdherent->add($adherent);
           $message_modal_admin = "On est dans la boucle de vérification";
        }
        else{
            $message_modal_admin = "Mot de passe doit être identique dans les deux champs de saisie : ";
        }
    }else{
        $message_modal_admin = "Pseudo déjà utilisé : ";
    }


}

