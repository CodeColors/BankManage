<?php
session_start();

if(isset($_SESSION['id'])){
  if($_SESSION['rank'] == "0"){
    header('Location: customer_home.php');
  }else if($_SESSION['rank'] == "1"){
    header('Location: banker_home.php');
  }
}

?>

<html>
  <head>
    <title>Bank of Los Santos</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
  </head>
  <body style="background-image: url('assets/img/background.png'); ">
      <div class="jumbotron text-center blue-grey lighten-5">

        <!-- Title -->
        <h2 class="card-title h2">Bank of Los Santos</h2>

        <!-- Subtitle -->
        <p class="indigo-text my-4 font-weight-bold">Welcome on the new website of the Bank of Los Santos</p>

        <!-- Grid row -->
        <div class="row d-flex justify-content-center">

          <!-- Grid column -->
          <div class="col-xl-7 pb-2">

            <p class="card-text">Bienvenue sur le site de la banque de Los Santos. Vous pouvez retrouver tous vos prêts et intérêts sur ce site. Vous pouvez de plus prendre des rendez-vous.</p>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <hr class="my-4 pb-2">

        <a href="login.php" class="btn blue-gradient btn-rounded">Se connecter <i class="far fa-id-badge ml-1"></i></a>
        <!-- Central Modal Small -->
        <div class="modal fade top" id="contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalPreviewLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalPreviewLabel">Contact</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Merci de contacter un banquier via l'adresse e-mail suivante : <b>x@discord.gg</b>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-indigo btn-rounded" data-dismiss="modal">Fermer</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Central Modal Small -->
        <a class="btn btn-indigo btn-rounded" type="button" class="btn btn-danger" data-toggle="modal" data-target="#contact">Prise de rendez-vous <i class="fas fa-envelope-open ml-1"></i></a>

      </div>
    <!-- Jumbotron -->
  </body>
  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>
</html>
