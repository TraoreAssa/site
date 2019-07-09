$(document).ready(function() {

    $("#envoi").click(function(event) {
        // insert est le button pour envoyer une message
        event.preventDefault();
        // window.location = "http://www.google.com";

        ajax();

    });

    //Joint COM.php (Insertion dans la BDD) et les champs du form

    function ajax() {
        var nom = $("#nom").val();
        var prenom = $("#prenom").val();
        var email = $("#email").val();
        var message = $("#message").val();


        console.log(prenom + " " + email + '  ' + message + '  ' + nom);



        var parameters = "message=" + message + "&nom=" + nom + "&prenom=" + prenom + "&email=" + email;

        // console.log(parameters);

        $.post("cont.php", parameters, function (data) {
            $("#resultat").html(data.resultat);
        }, 'json');

        $('#formulaire').trigger("reset");
        // reboot le formulaire apres insertion (efface les donnée aprés insertion)

    }

});

