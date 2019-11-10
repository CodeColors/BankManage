<?php

include('assets/includes/banker_header.php');

?>
    <div class="row" style="margin: 5%;">
      <div class="col">
        <div class="card">
          <!-- Card image -->
          <div class="view overlay">
            <img class="card-img-top" src="http://swattraining.info/wp-content/uploads/2016/03/logo-512x5123.png" alt="Users">
            <a href="banker_account.php">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

          <!-- Card content -->
          <div class="card-body">

            <!-- Title -->
            <h4 class="card-title">Comptes clients</h4>
            <!-- Text -->
            <p class="card-text">Gestion des comptes clients (création, modification, suppression).</p>
            <!-- Button -->
            <a href="banker_account.php" class="btn btn-primary">Aller</a>

          </div>

        </div>
      </div>
      <div class="col">
        <div class="card">
          <!-- Card image -->
          <div class="view overlay">
            <img class="card-img-top" src="https://pngimage.net/wp-content/uploads/2018/06/logo-malette-png-2.png" alt="Malette">
            <a href="banker_investissement.php">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

          <!-- Card content -->
          <div class="card-body">

            <!-- Title -->
            <h4 class="card-title">Investissements</h4>
            <!-- Text -->
            <p class="card-text">Gestion des investissements (ajout d'un dossier, modication, suppression).</p>
            <!-- Button -->
            <a href="banker_investissement.php" class="btn btn-primary">Aller</a>

          </div>

        </div>
      </div>
      <div class="col">
        <div class="card">
          <!-- Card image -->
          <div class="view overlay">
            <img class="card-img-top" src="https://png.pngtree.com/png-vector/20191003/ourmid/pngtree-hand-gives-money-icon-flat-style-png-image_1789063.jpg" alt="Prets">
            <a href="banker_loans.php">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>

          <!-- Card content -->
          <div class="card-body">

            <!-- Title -->
            <h4 class="card-title">Prêts</h4>
            <!-- Text -->
            <p class="card-text">Gestion des prêts effectué (ajout, statut du remboursement, suppression).</p>
            <!-- Button -->
            <a href="banker_loans.php" class="btn btn-primary">Aller</a>

          </div>

        </div>
      </div>
    </div>
  </body>
</html>
