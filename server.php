<?php

require_once 'functions/helper.php';
session_start();


//On etablit la connexion a la BDD MariaDB
$connexion = db_connexion();
$pseudo =  trim(ucfirst($_POST['pseudo']));
$mdp =  trim($_POST['mdp']);
$mdp1 =  trim($_POST['mdp1']);

if (!empty($_POST['pseudo'])  && $mdp===$mdp1){

       $requete = "insert into users(pseudo,mdp) VALUES (?, ?)";

    try {
        $requetePreparee = $connexion->prepare($requete);
        $requetePreparee->execute([$pseudo, $mdp]);

    } catch (Exception $exception) {
        $exception->getMessage();
    }
    header('Location: game.php');
}else{
    header('Location: index.php');
}
