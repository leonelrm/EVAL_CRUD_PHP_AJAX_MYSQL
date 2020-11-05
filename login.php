<?php
session_start();
?>
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
        <div class="text-left  text-uppercase py-3 px-3 justify-content-end text-white titre-page">
            <img src="images/logo.jpg" alt="logo" style="width: 100px ">
            <ul class="nav justify-content-end ">
                <li class="nav-item">
                    <a class="nav-link-active text-white px-2" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link-active text-white px-2" href="index.php">Register</a>
                </li>
            </ul>
        </div>
    </div>
    <div id="login" class="container text-center mx-auto">
        <form class="form-signin py-5 px-4" action="server.php" method="post">
            <img class="mb-4" src="images/login.jpg" alt="" width="72" height="72">
            <div class="erreur" id="erreur">
                <p>user inconnu du systeme</p>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="sr-only">Votre Pseudo de connexion</label>
                <input type="text" id="inputEmail" class="form-control" placeholder="Votre Pseudo de connexion" required>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="sr-only">Votre mot de passe</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Votre mot de passe" required>
            </div>
            <button class="btn-connexion btn-lg btn-block" type="submit">Connexion</button>
            <p class="mt-1 mb-1 ">Vous n'avez pas un compte? Creez en un <a href="index.php">ici</a></p>
        </form>
    </div>
<!-- Optional JavaScript; choose one of the two! -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/app.js" defer></script>
</body>
</html>
