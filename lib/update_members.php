<?php
$allMembers = $bdd->query('SELECT * FROM adherent');
$ar_adherent = array();
while ($data_members = $allMembers->fetch()){
    $ar_adherent[$data_members['IdAdherent']] = $data_members;
}

/*
if (isset($_GET['page'])&& !empty($_GET['page'])){
    if(array_key_exists($_GET['page'], $ar_page)){
        $page = $_GET['page'];
    }
}
*/