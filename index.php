<?php include('controllers/getActuAffich.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ACCUEIL</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  
  <link href="css/styles.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top box-shadow-nav bgColor-nav">
    <div class="container">
      <!--<a class="navbar-brand" href="index.html">Start Bootstrap</a>-->
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active activer">
            <a class="nav-link primary" href="">ACCUEIL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link primary" href="etude.php">L'ETUDE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link primary" href="notaire.php">LE NOTAIRE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link primary" href="competences.php">COMPÉTENCES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link primary" href="contact.php">CONTACT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <?php 

  if (isset($_GET['reponse']) && $_GET['reponse'] == 'rdv') {
    echo '  <div style="position: absolute; text-align: center; top: 80px;z-index: 999;">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Votre Rendez-Vous a été pris en compte!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>';
  }
  
  ?>



  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('imgs/Plan de travail 1.png')">
          <div class="carousel-caption d-none d-md-block">
            <h1>TIACOH - NOTAIRE</h1>
          </div>
        </div>
        
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('imgs/Plan de travail 1.png')">
          <div class="carousel-caption d-none d-md-block">
            <h1>TIACOH - NOTAIRE</h1>
          </div>
        </div>

        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('imgs/Plan de travail 1.png')">
          <div class="carousel-caption d-none d-md-block">
            <h1>TIACOH - NOTAIRE</h1>
          </div>
        </div>

      </div>
      
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

<section>
  <div class="bgColor-primary" style="padding: 50px;">
    <div class="container">
    <div class="row">
    <h1 class="" style="padding-bottom: 8px; padding-left: 0em;padding-right: 0em;">Une vision nouvelle du notariat.</h1>
      <p class="" style="">
      Le notariat, profession introduite en France au moyen Age (fin Ve siècle jusqu’au XVe siècle) est vieille de plus de 1000 ans. Transporté par le cours de l’histoire dans tous les pays de droit latin, elle subit au fil du temps une mue considérable.
      </p>
      <p class="" style="">
      Face à cette ère du numérique qui s’impose à nous, nous professionnels du droit venus dans le domaine après l’an 2000, sommes dans l’obligation de conserver les principes et valeurs traditionnelles de cette grande et noble profession. 
      </p>
      <p class="" style="">
      Nous adaptons donc notre savoir-faire à ce monde empreint de toute part de globalisation économique, d’avancée digitale et de mutations de nos sociétés.
      </p>
      <p class="" style="">
      Une prestation sur mesure pour un service de qualité.
      </p>
    </div>
    </div>
  </div>
</section>

<section class="bgColor-secondary" style="border-bottom: 1px solid black; padding-bottom: 50px;">
  <div class="container">
    <div class="row text-center d-block">
        <h1 class="text-center" style="font-weight:bold; padding-top: 50px; padding-bottom: 50px;">NOS SERVICES EN LIGNE</h1>
        <a href="" class="bordure-service text-center" stylle="" data-toggle="modal" data-target="#prendreRdv">
          <img src="imgs/services/1.svg" alt="" style="width: 100px;">
          <!--<span class="icon-rendez"></span>-->
          <p>PRENDRE RENDEZ-VOUS</p>
        </a>
    </div>
  </div>
</section>

<section class="bgColor-secondary" style="padding-bottom: 50px;">

  <div class="container">
    <h1 class="text-center bold" style="margin-bottom: 50px !important; padding-top: 50px !important; padding-bottom: 50px;">NOS ACTUALITÉS</h1>

    <!-- Marketing Icons Section -->
    <div class="row">

    <?php foreach ($liste as $key => $value) {
        
        ?>

      <div class="col-lg-4 mb-4">
        <div class="card box-shadow" style="width: 21rem;">
          <img src="<?php echo $value->getPhoto();?>" class="card-img-top" style="height: 300px" alt="...">
          <div class="card-body bgColor-secondary" style="height: 300px;">
            <h5 class="card-title" id="titre<?php echo $key;?>">
              <?php echo $value->getTitre();?>
            </h5>
            <i  id="lireplu<?php echo $key;?>" data-toggle="modal" data-target="#exampleModalScrollable<?php echo $value->getId();?>" style="display: none;">...</i>
            <p class="card-text actuDesc" style="max-height: 120px; height: 150px; margin: 0px;" id="<?php echo $key;?>">
            <?php echo $value->getDescription();?>
            </p>
            <button class="btn btn-primary" type="button"  id="lireplus<?php echo $key;?>" data-toggle="modal" data-target="#exampleModalScrollable<?php echo $value->getId();?>" style="display: none;">lire plus</button>
            <h6 style="position: absolute; bottom: 0 !important;">
            <?php echo $value->getLadate();?>
            </h6>
          </div>
        </div>
      </div>


      <!-- Modal -->
      <div class="modal fade" id="exampleModalScrollable<?php echo $value->getId();?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalScrollableTitle"><?php echo $value->getTitre();?></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php echo $value->getDescription();?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
      </div>

      <?php }?>

    </div>
  </div>

</section>

<section>
  <div class="container">
    
  <h1 class="text-center bold" style="padding-top: 50px;  padding-bottom: 50px;">NOS PARTENAIRES</h1>
    <div class="row" style="padding-top: 50px;  padding-bottom: 50px; margin: auto;">

      <div class="col-lg-3 mb-4" style="margin: auto;">
        <div class="card h-100" style="width: 300px;">
          <div class="card-body" style="margin: auto; text-align: center;">
            <img style="max-width: 200px;" src="imgs/partenaires/partenaire1.jpg" alt="">
            <h4>Lambert Kouadio TIACOH</h4>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="bgColor-primary" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 mb-4">
        <img src="imgs/logo/logo.svg" alt="">
      </div>
      <div class="col-lg-4 mb-4" style="display: flex;">
        <nav class="footer-nav">
          <ul>
            <li class="activa"><a class="" href="index.php">ACCUEIL</a></li>
            <li><a class="footer-nav-lien" href="etude.php">L’ETUDE</a></li>
            <li><a class="footer-nav-lien" href="notaire.php">LE NOTAIRE</a></li>
            <li><a class="footer-nav-lien" href="competences.php">COMPÉTENCES</a></li>
            <li><a class="footer-nav-lien" href="contact.php">CONTACT</a></li>
          </ul>
        </nav>
      </div>
      <div class="col-lg-4 mb-4" style="margin-top: 30px;">
        <div class="card" style="border-radius: 0px;">
            <div class="card-header card-entete">
            NOS CONTACTS
            </div>
            <ul class="list-group list-group-flush bg-wood">
              <li class="list-group-item">
                <img class="icon-localisation" src="imgs/footer/localisation.svg" alt="">
                <p style="margin: 0px;">Localisation; ABIDJAN & TOUMODI, Côte d’Ivoire</p>
              </li>
              <li class="list-group-item">
                <img class="icon-localisation" src="imgs/footer/tel.svg" alt="">
                <div style="display: grid;">
                  <a class="footer-tel" href="tel: +225 20 24 25 16" style="margin: 0px;">(+225) 20 24 25 16 Abidjan</a>
                  <a class="footer-tel" href="tel: +225 07 84 84 69" style="margin: 0px;">(+225) 07 84 84 69 Toumodi</a>
                </div>
              </li>
              <li class="list-group-item">
                <img class="icon-localisation" src="imgs/footer/mail.svg" alt="">
                <a class="footer-tel" href="mailto: jerometiacoh@notaire-tiacoh.com" style="margin: 0px;">jerometiacoh@notaire-tiacoh.com </a>
              </li>
            </ul>
          </div>
      </div>
    </div>
  </div>
</section>





<!-- Modal -->
<div class="modal fade" id="prendreRdv" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header" style="display: contents;">
      <img class="img-fluid" src="imgs/logo/logo.svg" style="width: 8em; margin: auto;" alt="">
      <p class="text-center">(Formulaire de prise de Rendez-Vous)</p>
        <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>-->
      </div>
      <form action="controllers/priseRdv.php" method="POST">
        <div class="modal-body">

          <div class="row">
            <div class="col-sm-6 mb-2">
              <input type="text" name="nom" class="form-control" placeholder="Nom" required>
            </div>
            <div class="col-sm-6 mb-2">
              <input type="text" name="prenom" class="form-control" placeholder="Prénom (s)" required>
            </div>
            <div class="col-sm-6 mb-2">
              <input type="text" name="fonction" class="form-control" placeholder="Profession" required>
            </div>
            <div class="col-sm-6 mb-2">
              <input type="tel" name="numero" class="form-control" placeholder="Téléphone" required>
            </div>
            <div class="col-sm-12 mb-2">
              <input type="email" name="mail" class="form-control" placeholder="Adresse mail" required>
            </div>
            <div class="col-sm-12 mb-2">
            <textarea class="form-control" name="objet" placeholder="Motif du RDV" style="max-width: 600px; max-height: 80px" name="" id="" cols="30" rows="3"></textarea>
            </div>
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
          <button type="submit" class="btn btn-primary">Valider</button>
        </div>
      </form>
    </div>
  </div>
</div>

  <!-- Footer -->
  <footer class="py-2 bgColor-primary">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Novate-media 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script>
    $(function(){
      titre = $('.card-title');
      description = $('.actuDesc');
      //console.log(description[0])

      for (let index = 0; index < titre.length; index++) {
        //console.log(titre[index].lastChild.length);
        const element = titre[index];
        if (titre[index].lastChild.length >= 60) {
          $("#titre"+index).css("overflow", "hidden");
          $("#lireplu"+index).css("display", "contents");
         
        }
      }


      for (let index = 0; index < description.length; index++) {
        //console.log(description[index].lastChild.length);
        const element = description[index];
        if (description[index].lastChild.length >= 250) {
          $("#"+index).css("overflow", "hidden");
          $("#lireplus"+index).css("display", "block");
          
        }
        
      }



      /*if (nombreCara[1].lastChild.length >= 600) {
        $(".actuDesc").css("overflow", "hidden");
        $(".actuDesc").append('<a href="">lire plus</a>')
      }*/
    })
  </script>

</body>

</html>
