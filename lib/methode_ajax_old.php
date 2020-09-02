<?php
include_once('../config/config.php');
$ThisNewsJson = array();
if (!empty($_GET)) {
    if (isset($_GET['id_news'])) {
        //Pourquoi quand on utilise ajax il faut rebalancer le cofig ?
        //include_once('./config/config.php');
        $req_ThisNews = $bdd->prepare('SELECT * FROM nouvelle WHERE IdNouvelle = :id');
        $req_ThisNews->execute(array('id' => $_GET['id']));
        $ThisNews = $req_ThisNews->fetch();
        $ThisNewsJson = json_encode($ThisNews);
    } else {
    }
    echo($ThisNewsJson);
}






/*
$msg = array();

if($user_level == 2){
    if(!empty($_POST)) {
        if (isset($_POST['informations']) && $_POST['informations'] == 1) {
            if(isset($_POST['description']) && !empty($_POST['description'])) {
                $req_insertNews = $bdd->prepare('INSERT INTO nouvelle (Titre,Texte) VALUES ( :titre, :texte)');
                $req_insertNews->execute(array('titre' => $_POST['title'], 'texte' => $_POST['description']));
                $msg['title'] = $_POST["title"];
                $msg['description'] = $_POST["description"];
                //$msg['tmpl'] = '<a href="./index.php?page=information&id='.$donnees['IdNouvelle'].'">'.$donnees['Titre'].'</a>';
                echo "Ajout d'une nouvelle.";
            }
            echo 'Probleme l.11 : methode_ajax_old.php';
        }
        echo 'Probleme l.13 ! methode_ajax_old.php';
    }
}else{
    echo "Vous n'etes pas authorisé à appeller cette methode.";
}
echo json_encode($msg);
*/