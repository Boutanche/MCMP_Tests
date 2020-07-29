<?php
if(!empty($_POST)) {
    if (isset($_POST['formulaire'])) {
        if ($_POST['formulaire'] == 'add_type_activity') {

            $query = 'INSERT INTO type_activite(
                IntituleType
                ) VALUE (
                "'.$_POST["IntituleType"].'"
                )';
            $bdd->query($query);
        }
    }
}