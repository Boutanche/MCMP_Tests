<?php
if(!empty($_POST)) {

    if (isset($_POST['formulaire'])) {
        if ($_POST['formulaire'] == 'log') {
            if(isset($_POST['login']) AND isset($_POST['password'])) {
                if (!empty($_POST['login']) and !empty($_POST['password'])) {
                    $query = 'SELECT IdAdherent, Nom, Prenom, Organisateur 
                                FROM adherent 
                                WHERE Login = "' . $_POST['login'] . '" 
                                    AND Password = "' . $_POST['password'] . '"';
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
                }
            }
        }
    }
}