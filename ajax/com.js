$(document).ready(function(){
   
    $("#ajouter").click(function(event){
        // insert est le button pour ajouter un commentaire
        event.preventDefault();
        window.location="ajax/formulaire.php";
        
    });

    $("#annuler").click(function(event){
        // insert est le boutton pour Annuler un commentaire
        event.preventDefault();
        window.location="../index.php";
        
    });


    $("#insert").click(function(event){
        // insert est le boutton pour valider le commentaire
        event.preventDefault();
        ajax();        

    });

    
    //Joint COM.php (Insertion dans la BDD) et les champs du form
    function ajax (){
        var pseudo = $("#pseudo").val();
        var email = $("#email").val();
        var commentaire = $("#commentaire").val();
        var date = $("#date").val();
        
    
        // console.log(pseudo + " " + email + '  ' +  commentaire + '  ' +  date);
        // console.log(commentaire + '  ' );

        var parameters = "commentaire="+commentaire + "&date="+date + "&pseudo="+pseudo + "&email="+email; 

        console.log(parameters);


        $.post("com.php", parameters, function(data){
            $("#resultat").html(data.resultat);
        }, 'json');

        // $('#formulaire').trigger("reset");
        //reboot le formulaire apres insertion (efface les donnée aprés insertion)

        // window.setTimeout("location=('../index.php');",5000);

        
    }

});