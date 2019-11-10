<?php
include('assets/includes/banker_header.php');

if(!(isset($_SESSION['id']))){
  header('Location: index.php');
}
if($_SESSION["rank"] == "1" || $_SESSION['rank'] == "2"){

require('./assets/includes/db.php');

require('./assets/includes/accounts.php');

/**
 * INIT VARS
 * 
 */

$freq = null;
$freq2 = null;

if($_GET['type'] == "1"){ // MODIFIY ACCOUNT
  if(!(isset($_GET['id']))){
    header('Location: banker_account.php');
    die();
  } 

  $req = $bdd->query('SELECT * FROM users WHERE id = '.$_GET['id']);
  $freq = $req->fetchAll();

  $req2 = $bdd->query('SELECT * FROM accounts WHERE user_id = '.$_GET['id']);
  $freq2 = $req2->fetchAll();
?>
<br>
<hr>
<br>
<div class="container">

  <div class="row">

    <div class="col-lg-12">
      <div class="card card-cascade wider">

        <!-- Card content -->
        <div class="card-body card-body-cascade text-center pb-0">
          <!-- Title -->
          <h4 class="card-title"><strong>Modification d'un compte</strong></h4>

          <form class="text-center p-5" method="post" action="">

            <div class="form-row mb-4">
              <div class="col">
                <!-- Username -->
                <input type="text" class="form-control" placeholder="Identifant" name="username" value="<?= $freq['user']; ?>" required>
              </div>
            </div>

            <!-- Name -->
            <input type="text" class="form-control mb-4" placeholder="Nom et Prénom du client" name="name" value="<?= $freq2['name']; ?>" required>
            <?php var_dump($freq); var_dump($freq2); var_dump($freq['id']); ?>
            <!-- Phone number -->
            <input type="text" class="form-control" placeholder="Type de compte" name="type" value="<?= $freq2['type']; ?>" required>
            <br />
            <!-- Solde -->
            <input type="text" class="form-control" placeholder="Solde actuel" name="solde" value="<?= $freq2['solde']; ?>" required>


            <!-- Sign up button -->
            <input class="btn btn-info my-4 btn-block" type="submit" name="modify">

          </form>
          <!-- Default form register -->
        </div>

      </div>
    </div>
  </div>
</div>

<?php
}elseif($_GET['type'] == "3"){ // DELETE ACCOUNTS
  if(isset($_GET['id'])){
    $bdd->query('DELETE FROM users WHERE id = '.$_GET['id']);
    $bdd->query('DELETE FROM accounts WHERE user_id = '.$_GET['id']);
    header('Location: banker_account.php');
  }
}elseif($_GET['type'] == "4"){ // CREATE ACCOUNTS
  if(isset($_POST['create'])){
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT); 

    $reqUser = $bdd->prepare('INSERT INTO users(user, pass, rank) VALUES (:user, :pass, :rank)');
    $reqUser->execute(array(
      ['user'] => $_POST['username'],
      ['pass'] => $pass,
      ['rank'] => "0"
    ));

    $grID = $bdd->query('SELECT * FROM users WHERE user = '.$_POST['username']);
    $rID = $grID->fetch();
    
    $reqAcc = $bdd->prepare('INSERT INTO accounts(user_id, name, type, solde) VALUES ('.$rID['id'].', :name, :type, :solde)');
    $reqAcc->execute(array(
      ['name'] => $_POST['name'],
      ['type'] => $_POST['type'],
      ['solde'] => $_POST['solde']
    ));


    var_dump($rID);
    header('Location: banker_account.php');
  }
?>
<br>
<hr>
<br>
<div class="container">

  <div class="row">

    <div class="col-lg-12">
      <div class="card card-cascade wider">

        <!-- Card content -->
        <div class="card-body card-body-cascade text-center pb-0">
          <!-- Title -->
          <h4 class="card-title"><strong>Création d'un compte</strong></h4>

          <form class="text-center p-5" method="post" action="">

            <div class="form-row mb-4">
              <div class="col">
                <!-- Username -->
                <input type="text" class="form-control" placeholder="Identifant" name="username" required>
              </div>
              <div class="col">
                <!-- PAssword -->
                <input type="password" class="form-control" placeholder="Mot de passe" name="password" required>
              </div>
            </div>

            <!-- Name -->
            <input type="text" class="form-control mb-4" placeholder="Nom et Prénom du client" name="name" required>

            <!-- Phone number -->
            <input type="text" class="form-control" placeholder="Type de compte" name="type" required>
            <br />
            <!-- Solde -->
            <input type="text" class="form-control" placeholder="Solde actuel" name="solde" required>


            <!-- Sign up button -->
            <input class="btn btn-info my-4 btn-block" type="submit" name="create">

          </form>
          <!-- Default form register -->
        </div>

      </div>
    </div>
  </div>
</div>
<?php
}else{
  echo 'Bad Arguments : type';
  die();
}

}else{
  header('Location: index.php');
}
?>