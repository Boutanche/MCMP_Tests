<?php
//Vieille Fonction qui sert surtout à voir ce qui se passe avec une fonction hash.
//Elle reste ici pour complexifier les password.
function My_Crypt($password){
    //on peut utiliser une boucle pour de 64 et remelanger les lettres ?
    //on peut ajouter un Salt (un mot secret) a concatener avec pass word ?
    //puis peut etre creer une fonction decript du salt ?
    return hash ('sha256', $password);
}