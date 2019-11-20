<?php

function chargementClasse() {
    require '../../classes/user/bd.php';
}
spl_autoload_register('chargementClasse');
include('../../classes/basedonner.php');

$connexionDb =  new baseD($bd);

if ($_GET['entite'] == 'user') {
    echo $_GET['id'];
    echo $_GET['entite'];
    echo 'supprimer';
    $connexionDb->delect($_GET['id']);

header('location:../listUser.php?etat=supprimer');
    //exit;
} else {
    echo 'erreur';
}




?>