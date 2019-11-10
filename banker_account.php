<?php

include('assets/includes/banker_header.php');

require('./assets/includes/db.php');

require('./assets/includes/accounts.php');

$rsAll = $bdd->query('SELECT * FROM users WHERE rank = 0');
$sAll = $rsAll->fetchAll();

$rsAcc = $bdd->query('SELECT * FROM accounts');
$sAcc = $rsAcc->fetchAll();
?>

<br>
<hr>
<br>

<div class="container">
  <div class="card-footer text-center mt-4">
      <a class="btn btn-primary" href="dossiers.php?type=4">Créer un nouveau compte</a>
  </div>
  <div class="row">
    
    <div class="col-lg-6">
      <?php 
        foreach($sAll as $client): 
          $account = getAccountByUser($client, $sAcc);
      ?>
      <div class="card card-cascade wider">
        
        <!-- Card image -->
        <div class="view view-cascade overlay">
          <img class="card-img-top" src="http://swattraining.info/wp-content/uploads/2016/03/logo-512x5123.png" alt="user">
          <a href="#!">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!-- Card content -->
        <div class="card-body card-body-cascade text-center pb-0">

          <!-- Title -->
          <h4 class="card-title"><strong><?= $account['name']; ?></strong></h4>
          <!-- Subtitle -->
          <h5 class="blue-text pb-2"><strong><?= $account['type']; ?></strong></h5>
          <!-- Text -->
          <p class="card-text"><strong>Solde :</strong> <?= $account['solde'];  ?>$</p>

          <!-- Card footer -->
          <div class="card-footer text-muted text-center mt-4">
            <a class="btn btn-warning" href="dossiers.php?id=<?= $client['id']; ?>&type=1">Modifier</a>
            <a class="btn btn-danger" href="dossiers.php?id=<?= $client['id']; ?>&type=3">Supprimer</a>
          </div>

        </div>

      </div>
      <?php endforeach; ?>
      <!-- Card Wider -->

    </div>
  </div>
</div>

</body>

</html>