<?php


function chargementClasse() {
    require '../../classes/user/user.php';
    require '../../classes/user/bd.php';
}

spl_autoload_register('chargementClasse');

//Les informaction de connexion a base de donner
include('../../classes/basedonner.php');

$connexionDb = new baseD($bd);


//les attributs du formulaire RDV
$username = $_POST["username"];
$mdp = $_POST["mdp"];   


$liste = $connexionDb->connexion($username, $mdp);
var_dump($liste->getId());

$id = $liste->getId();
$username = $liste->getUsername();


if ($id == null) {
    //echo "mot de passe ou username incorrect";
    header('location: ../?reponse=error');
} elseif ($id != null && $username != null) { 
    //echo "mot de passe ou username correct";
    header('location: ../listRdv.php');
}



?>