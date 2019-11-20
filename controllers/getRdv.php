<?php

function chargementClasse() {
    require '../classes/RDV/rdv.php';
    require '../classes/RDV/bd.php';
}

spl_autoload_register('chargementClasse');

//inclusion de la base de donnee
include('../classes/basedonner.php');

$connexionDb = new baseD($bd);

$liste = $connexionDb->list();

/*foreach ($liste as $key => $value) {
    var_dump($value->getId());
}*/

//var_dump($liste);
//echo $liste[0]->getLadate();
?>