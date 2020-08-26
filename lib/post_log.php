<?php
if(!empty($_POST)) {

    if (isset($_POST['formulaire'])) {
        if ($_POST['formulaire'] == 'log') {
            if(isset($_POST['login']) AND isset($_POST['password'])) {
                if (!empty($_POST['login']) and !empty($_POST['password'])) {
                    $req_log = $bdd->prepare('SELECT IdAdherent, Nom, Prenom, Organisateur, Password, Login FROM adherent WHERE Login = :log AND Password = :pass');

                        $req_log->execute(array(
                            'log' => $_POST['login'],
                            'pass' => $_POST['password']
                            ));
                        $resultat_login = $req_log->fetch();
                        var_dump(!$resultat_login);

                        if(!$resultat_login) {
                            $message_log = "Mauvais mot de passe ou identifiant";
                            $page = 'accueil';
                        }
                        else {
                            //Comparaison du pass
                            //$isPasswordCorrect = password_verify($_POST['password'], $resultat_login['Password']);
                            //if ($isPasswordCorrect) {
                            if ($_POST['password'] == $resultat_login['Password']){
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
                                var_dump($resultat_login);
                                //var_dump( $isPasswordCorrect);
                            }
                        }




/*
                    $query = 'SELECT IdAdherent, Nom, Prenom, Organisateur 
                                FROM adherent 
                                WHERE Login = "' . $_POST['login'] . '" 
                                    AND Password = "' . $_POST['password'] . '"';
                    echo $query;
                    $reponse = $bdd->query($query);
                    if ($reponse->rowCount() == 1) {
                        while ($donnees = $reponse->fetch()) {
                            $nom = $donnees['Nom'];
                            $prenom = $donnees['Prenom'];
                            $_SESSION['id_adherent'] = $donnees['IdAdherent'];
                            $_SESSION['nom'] = $nom;
                            $_SESSION['prenom'] = $prenom;
                            $user_level = 1;
                            if ($donnees['Organisateur'] == 1) {
                                $user_level = 2;
                            }
                            $_SESSION['user_level'] = $user_level;
                            $message_log = "Bravo " . $prenom . " " . $nom . " vous êtes connecté!";
                            $page = $homepage;
                        }
                    } else {
                        $message_log = "Identifiant ou mot de passe invalide!";
                    };
*/
                }
            }
        }
    }
}