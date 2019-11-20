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
 $dossierImg = '../img-actu/';
 $src = 'admin/img-actu/'.$photo;
//echo $_FILES["images"]["error"];
//print_r($_FILES);
$moved = move_uploaded_file($_FILES["images"]["tmp_name"], $dossierImg.$photo);

if( $moved ) {
    echo "Successfully uploaded";

    
//Les donner dans un tableau
    $donner = [
        'titre' => $titre,
        'ladate' => $ladate,
        'description' => $description,
        'photo' => $src
    ];     

    
    $priseactu = new Actualite($donner);
    $resultat = (new baseD($bd))->add($priseactu);
    echo "save";
    header('location:../addActu.php?reponse=actu');

  } else {
      //var_dump($moved);
      //echo "Not uploaded";
      header('location:../addActu.php?reponse=non');

  }



//header('location:../admin/addActu.php?reponse=rdv')




?>