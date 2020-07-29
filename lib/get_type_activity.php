<?php
$getTypeActivity = $bdd->query('SELECT * FROM type_activite');
$ar_activity = array();
while ($donnees = $getTypeActivity->fetch()){
    $ar_activity[$donnees['IntituleType']] = $donnees;
}
