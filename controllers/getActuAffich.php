<?php

function chargementClasse() {
    require 'classes/actu/actu.php';
    require 'classes/actu/bd.php';
}

spl_autoload_register('chargementClasse');

//inclusion de la base de donnee
include('classes/basedonner.php');

$connexionDb = new baseD($bd);

$liste = $connexionDb->listLimite();

/*foreach ($liste as $key => $value) {
    var_dump($value->getId());
}*/

//var_dump($liste);
//echo $liste[0]->getLadate();
?>

