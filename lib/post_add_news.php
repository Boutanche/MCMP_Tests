<?php
echo 'post ad news  : OK' ;
$today = date("Y:m:d");
if(!empty($_POST)) {
    echo 'post pas vide ' ;
    if (isset($_POST['formulaire'])) {
        echo ' post = formulaire ' ;
        if ($_POST['formulaire'] == 'add_news') {
            echo ' post formulaire = add news ' ;
            $req_insertNews = $bdd->prepare('INSERT INTO nouvelle (Titre, Intro, Texte, DPubli, Diffusion_Level, Image) VALUES ( :titre, :intro, :texte, :dpubli, :diffusion, :image)');
            try {
               $result = $req_insertNews->execute(array(
                    'titre' => $_POST['title'],
                    'intro' => $_POST['intro'],
                    'texte' => $_POST['description'],
                    'dpubli' => $today,
                    'diffusion' => 1,
                    'image' => null ));

               //echo "Résultat de la requête  : ".var_dump($result)."<br>";
            }catch(Exception $e) {
                echo $e;
            }

            //echo var_dump($req_insertNews);
        }

    }
}