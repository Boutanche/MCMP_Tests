<?php
$reponse = $bdd->query('SELECT * FROM page');
    $ar_page = array();
    while ($donnees = $reponse->fetch()){
        $ar_page[$donnees['key_file']] = $donnees;
    }
    $page = 'accueil';
    if (isset($_GET['page'])&& !empty($_GET['page'])){
        if(array_key_exists($_GET['page'], $ar_page)){
            $page = $_GET['page'];
        }
    }
    $title = $ar_page[$page]['metatitle'];
    $metadescription = $ar_page[$page]['metadescription'];
    $keywords = $ar_page[$page]['keywords'];
    $h1 =  ($ar_page[$page]['h1']);
    $menuTitre = $ar_page[$page]['menu'];
    $message_modal_admin = "Vous n'avez pas validé votre saisie";

    $title = utf8_encode($title);
    $h1 = utf8_encode($h1);
    $menuTitre = utf8_encode($menuTitre);
