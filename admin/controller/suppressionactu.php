<?php

function chargementClasse() {
    require '../../classes/actu/bd.php';
}
spl_autoload_register('chargementClasse');
include('../../classes/basedonner.php');

$connexionDb =  new baseD($bd);

if ($_GET['entite'] == 'actu') {
    $connexionDb->delect($_GET['id']);

header('location: ../listActu.php?etat=supprimer');
    //exit;
} else {
    echo 'erreur';
}




?>