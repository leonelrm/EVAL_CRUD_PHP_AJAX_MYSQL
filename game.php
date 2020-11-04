<?php
session_start();

?>
<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- font aweasome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/app.css"/>

    <title>EVAL_CRUD_PHP_AJAX_MYSQL</title>

</head>
<body>

<div class="container" id="navbar">
    <div class="text-left  text-uppercase py-3  justify-content-end text-white titre-page">
        <img src="images/logo.jpg" alt="logo" style="width: 100px ">
        <ul class="nav justify-content-end ">
            <li class="nav-item">
                <a class="nav-link-active text-white px-2" href="#">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link-active text-white px-2" href="#">Register</a>
            </li>
        </ul>
    </div>
</div>
<div class="container  d-flex my-4">
    <div id="img" class="col-md-6 ">
        <img src="images/accueil.jpg" style="height: 400px;" alt="accueil">
    </div>
    <div id="monForm" class="monForm mx-auto col-md-6">
        <form id="formLogin" action="server.php" method="post">
            <div class="form-group">
                <i class="fas fa-user-tie"></i>
                <input type="text" class="form-control" id="pseudo" name="pseudo"  placeholder="Votre Pseudo"/>
            </div>
            <div class="form-group">
                <span id="icon2"><i class="fas fa-key"></i></span>
                <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Votre mot de passe"/>
            </div>
            <div class="form-group">
                <span id="icon2"><i class="fas fa-key"></i></span>
                <input type="password" class="form-control" id="mdp2" name="mdp1"
                       placeholder="Repetez le mot de passe"/>
            </div>
            <div id="register" class="py-3">
                <button  type="submit" id="btn-valider" class="btn-block btn-valider py-2">S'enregistrer</button>
            </div>
        </form>
    </div>
    <div>

    </div>

</div>

<!-- Optional JavaScript; choose one of the two! -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/app.js" defer></script>
</body>
</html>
