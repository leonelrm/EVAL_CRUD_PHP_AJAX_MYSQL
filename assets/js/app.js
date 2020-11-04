/*$(document).ready(function () {

   $("#monForm").on('submit', function (e) {
        //Desactive le comportement par defaut du formulaire
        e.preventDefault();
    });

    //Permet d'ajouter un stagiaire
    $("#btn-valider").on('click', function () {
        insert();
    });
});

/**
 * Recupere la liste de tous les stagiaires de la BDD
 */

/*function insert() {
    //On recupere les infos saisi par le user
    let pseudo = $("#pseudo").val();
    let mdp = $("#mdp").val();
    let mdp2 = $("#mdp2").val();

    //On effectue la requete vers le server
    $.ajax({
        method: "POST",
        url: "server.php",
        data: {insert: 1, pseudo: pseudo, mdp: mdp, mdp2: mdp2}
    }).done(function () {
        //En cas de succes, On vide les infos du formulaire
        $("#pseudo").val('');
        $("#mdp").val('');
        $("#mdp2").val('');

    });


}

}*/