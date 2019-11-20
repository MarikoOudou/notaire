<?php

function chargementClasse() {
    require '../../classes/actu/actu.php';
    require '../../classes/actu/bd.php';
}

spl_autoload_register('chargementClasse');

//Les informaction de connexion a base de donner
include('../../classes/basedonner.php');



$base = new baseD($bd);

//les attributs du formulaire RDV
$titre = $_POST["titre"];
$ladate = $_POST["ladate"];
$description = $_POST["description"];
$photo = $_FILES["images"]["name"];
$file_temp = $_FILES["images"]["tmp_name"];
$dossierImg = $_SERVER['DOCUMENT_ROOT'].'/notaire/admin/img-actu/';
$src = $dossierImg.$photo;
//echo $_FILES["images"]["error"];
//print_r($_FILES);
$moved = move_uploaded_file($_FILES["images"]["tmp_name"], $dossierImg.$photo);

if( $moved ) {
    echo "Successfully uploaded";

    
//Les donner dans un tableau
    $donner = [
        'id' => $_GET['id'],
        'titre' => $titre,
        'ladate' => $ladate,
        'description' => $description,
        'photo' => $src
    ];     

    
    $priseactu = new Actualite($donner);
    $resultat = (new baseD($bd))->update($priseactu);
    echo "save";
    header('location:../listActu.php?etat=modif');

  } else {
    echo "Not uploaded";
  }



//header('location:../admin/addActu.php?reponse=rdv')




?>