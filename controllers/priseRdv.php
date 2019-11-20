<?php

function chargementClasse() {
    require '../classes/RDV/rdv.php';
    require '../classes/RDV/bd.php';
}

spl_autoload_register('chargementClasse');

//Les informaction de connexion a base de donner
include('../classes/basedonner.php');
include('sendemail.php');
include('../mail/contact_me.php');



//$base = new baseD($bd);

//les attributs du formulaire RDV
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$fonction = $_POST["fonction"];
$contact = $_POST["numero"];
$mail = $_POST["mail"];
$objet = $_POST["objet"];
$date = date('y/m/d');

//Les donner dans un tableau
$donner = [
    'nom' => $nom,
    'prenom' => $prenom,
    'profession' => $fonction,
    'contact' => $contact,
    'email' => $mail,
    'motif' => $objet,
    'ladate' => $date
];

mail();

$priserdv = new RendeVous($donner);
//sendMail($nom, $prenom, $fonction, $contact, $mail, $date, $motif);
$resultat = (new baseD($bd))->add($priserdv);

header('location:../?reponse=rdv')




?>