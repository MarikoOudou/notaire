<?php

function chargementClasse() {
    require '../../classes/user/user.php';
    require '../../classes/user/bd.php';
}

spl_autoload_register('chargementClasse');

//Les informaction de connexion a base de donner
include('../../classes/basedonner.php');



$base = new baseD($bd);

//les attributs du formulaire RDV
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$fonction = $_POST["fonction"];
$username = $_POST["username"];
$mdp = $_POST["mdp"];


//Les donner dans un tableau
  $donner = [
        'nom' => $nom,
        'prenom' => $prenom,
        'fonction' => $fonction,
        'username' => $username,
        'mdp' => $mdp
    ];     

    
  $priseactu = new User($donner);
  $resultat = (new baseD($bd))->add($priseactu);
  echo 'save';



header('location:../addUser.php?reponse=user')




?>