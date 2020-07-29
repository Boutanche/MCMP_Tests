<?php
// TODO : Gestion des € dans my SQL ?
if(!empty($_POST)) {
    if (isset($_POST['formulaire'])) {
        if ($_POST['formulaire'] == 'add_activity') {
            $query = 'INSERT INTO activite(
                IntituleActivite,
                DDebut,
                DFin,
                Description,
                TarifAdherent,
                TarifInvite,
                DLimite,
                IdAdherent,
                IdType
                ) VALUE (
                "'.$_POST["IntituleActivite"].'",
                "'.$_POST["DDebut"].'",
                "'.$_POST["DFin"].'",
                "'.$_POST["Description"].'",
                "'.$_POST["TarifAdherent"].'",
                "'.$_POST["TarifInvite"].'",
                "'.$_POST["DLimite"].'",
                "'.$_SESSION['id_adherent'].'",
                "'.$_POST["IdType"].'"
                )';
            $bdd->query($query);
        }
    }
}