<?php
session_start();
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

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>

  <body style="background-image: url('assets/img/background.png'); ">
  <header>
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark blue scrolling-navbar">
        <a class="navbar-brand" href="#"><strong>Bank of Los Santos</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="banker_home">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="banker_account.php">Comptes Clients</a>
            </li>
          </ul>
          <ul class="navbar-nav nav-flex-icons">
            <?php if($_SESSION['rank'] == "2"){ ?>
              <li class="nav-item">
                <a class="nav-link" href="admin/admin_membre.php">Administration</a>
              </li>
            <?php } ?>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Se déconnecter</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
