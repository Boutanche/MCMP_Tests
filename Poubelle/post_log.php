<?php
/*
if(!empty($_POST)) {
    if (isset($_POST['formulaire'])) {
        if ($_POST['formulaire'] == 'log') {
            if(isset($_POST['login']) AND isset($_POST['password'])) {
                if (!empty($_POST['login']) and !empty($_POST['password'])) {
                    //TODO: Securité :
                    $req_log = $bdd->prepare('SELECT IdAdherent, Nom, Prenom, Organisateur, Password, Login FROM adherent WHERE Login = :log');
                    $req_log->execute(array(
                        'log' => $_POST['login'],
                        ));
                    $resultat_login = $req_log->fetch();
                    if(!$resultat_login) {
                        $message_log = "Mauvais identifiant";
                        $page = 'accueil';
                        sleep(1);
                    }
                    else {
                        //Comparaison du pass
                        $isPasswordCorrect = password_verify($_POST['password'], $resultat_login['Password']);
                        if ($isPasswordCorrect) {
                        //$hashed_password = My_Crypt($_POST["password"]);
                        //if ($_POST['password'] == $resultat_login['Password']){
                            $nom = $resultat_login['Nom'];
                            $prenom = $resultat_login['Prenom'];
                            $_SESSION['id_adherent'] = $resultat_login['IdAdherent'];
                            $_SESSION['nom'] = $nom;
                            $_SESSION['prenom'] = $prenom;
                            $user_level = 1;
                            if ($resultat_login['Organisateur'] == 1) {
                                $user_level = 2;
                            }
                            $_SESSION['user_level'] = $user_level;
                            $message_log = "Bravo " . $prenom . " " . $nom . " vous êtes connecté!";
                            $page = $homepage;
                        } else {
                            $message_log = "Identifiant ou mot de passe invalide";
                            $page = 'accueil';
                            sleep(1);
                        }
                    }
                }
            }
        }
    }
}
*/