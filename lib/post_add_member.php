<?php
if(!empty($_POST)) {
    if (isset($_POST['formulaire'])) {
        if ($_POST['formulaire'] == 'add_member') {
            //TODO : BUG A CORRIGER :
            //SI droi_image != "on" == message erreur php !
            $droit_image = $_POST["droit_image"] == 'on' ? 1 : 0;
            if(empty($_POST["nom"]) || empty($_POST["prenom"])){
                $message_modal_admin = 'Vous devez saisir un nom et un prénom';
            }else{
                //TODO : Vérifier unicité du login
                //$hashed_password = My_Crypt($_POST["password"]);
                $hash_pass = password_hash($_POST["user_password"], PASSWORD_DEFAULT);
                //TODO : Gestion UPLOAD FILES
                $query = 'INSERT INTO adherent(
                        Nom,
                        Prenom,
                        DNaiss,
                        Adresse1,
                        CdPost,
                        Ville,
                        Email,
                        Tel,
                        DAdhesion,
                        Organisateur,
                        Login,
                        Password,
                        Droit_image
                        
                    ) VALUE (
                        "'.$_POST["nom"].'",
                        "'.$_POST["prenom"].'",
                        "'.$_POST["dnaiss"].'",
                        "'.$_POST["adresse1"].'",
                        "'.$_POST["cdpost"].'",
                        "'.$_POST["ville"].'",
                        "'.$_POST["email"].'",
                        "'.$_POST["tel"].'",
                        "'.$_POST["dadhesion"].'",
                        "'.$_POST["organisateur"].'",
                        "'.$_POST["login"].'",
                        "'.$hash_pass.'",
                        '.$droit_image.'
                        
                    )';
                echo "Query : " .$query;
                echo "Message pour voir ".$message_modal_admin;
                $bdd->query($query);
                $message_modal_admin='Inscription prise en compte.';

            }

        }
    }
}
