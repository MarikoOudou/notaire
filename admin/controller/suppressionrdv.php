<?php

function chargementClasse() {
    //require '../classes/RDV/rdv.php';
    require '../../classes/RDV/bd.php';
}
spl_autoload_register('chargementClasse');
include('../../classes/basedonner.php');

$connexionDb =  new baseD($bd);

if ($_GET['entite'] == 'rdv') {
    $connexionDb->delect($_GET['id']);

header('location:../listRdv.php?etat=supprimer');
} else {
    echo 'erreur';
    header('location:../listRdv.php?etat=error');
}




?>