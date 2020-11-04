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
                <a class="nav-link-active text-white px-2" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link-active text-white px-2" href="index.php">Register</a>
            </li>
        </ul>
    </div>
</div>
<div class="container  d-flex my-4">
    <div id="img" class="col-md-6 ">
        <img src="images/accueil.jpg"  alt="accueil">
    </div>
    <div id="monForm" class="monForm mx-auto col-md-6">
        <h2 class="my-3 text-center">CREER UN COMPTE</h2>
        <form   id="formLogin" action="server.php" method="post">
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
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember" required> J'accepte les termes d'utilisation.
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Check this checkbox to continue..</div>
                </label>
            </div>
            <div id="register" class="py-3">
                <button  type="submit" id="btn-valider" class="btn-block btn-valider py-2">S'enregistrer</button>
                <p class="mt-5 mb-3">Vous avez deja un compte? Connectez-vous <a href="login.php">ici</a></p>

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