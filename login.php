<?php
    session_start();
    if(isset($_SESSION['id'])){
        header('Location: index.php');
    }
    require('assets/includes/db.php');
    if(isset($_COOKIE['user']) && isset($_COOKIE['pass'])){
        $search = $bdd->prepare('SELECT * FROM users WHERE user = :user');
        $search->execute(array(
            'user' => $_COOKIE['user']
        ));
        $result = $search->fetch();

        $_SESSION = array();

        $_SESSION['id'] = $result['id'];
        $_SESSION['user'] = $result['user'];
        $_SESSION['rank'] = $result['rank'];

        if($_SESSION['rank'] == "0"){
          header('Location: customer_home.php');
        }else if($_SESSION['rank'] == "1" OR $_SESSION['rank'] == "2"){
          header('Location: banker_home.php');
        }
    }

    if(isset($_POST['signin'])){


        $search = $bdd->prepare('SELECT * FROM users WHERE user = :user');
        $search->execute(array(
            'user' => $_POST['user']
        ));
        $result = $search->fetch();

        if(!$result){
            echo "Mauvais identifiants.";
        }else{
            $isPasswordCorrect = password_verify($_POST['pass'], $result['pass']);
            if($isPasswordCorrect){
                $_SESSION['id'] = $result['id'];
                $_SESSION['user'] = $result['user'];
                $_SESSION['rank'] = $result['rank'];

                if(isset($_POST['remember'])){
                    setcookie('user', $_SESSION['user'], time()+365*24*3600,null,null,false,true);
                    setcookie('pass', $_POST['pass'], time()+365*24*3600,null,null,false,true);
                }

                if($_SESSION['rank'] == "0"){
                  header('Location: customer_home.php');
                }else if($_SESSION['rank'] == "1" OR $_SESSION['rank'] == "2"){
                  header('Location: banker_home.php');
                }
            }else{
                echo "Mauvais identifiants.";
            }
        }
    }
?>

<html>
    <head>
        <title>Bank of Los Santos</title>
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
      <br><br>
      <div class="container">
        <div class="card">
          <h5 class="card-header info-color white-text text-center py-4">
              <strong>Connection</strong>
          </h5>

          <div class="card-body px-lg-5 pt-0">

            <form class="md-form" method="post" style="color: #757575;">

              <input name="user" type="text" id="inputId" class="form-control" placeholder="Identifiant" required autofocus>

              <input name="pass" type="password" id="inputPass" class="form-control">

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1" name="remember" placeholder="Mot de passe" checked>
                <label class="custom-control-label" for="customCheck1">Se souvenir </label>
              </div>

              <button class="btn blue-gradient btn-rounded btn-block my-4 waves-effect z-depth-0" name="signin" type="submit">Connection</button>
              <a class="btn aqua-gradient btn-rounded btn-block my-4 waves-effect z-depth-0" href="index.php">Retour</a>

            </form>
            </div>
        </div>
      </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
