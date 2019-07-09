<?php
// require_once('../init/init.php');


//------------------REQUETE ALLER------------------------
$pseudo = addslashes($_POST['pseudo']);
$commentaire = addslashes($_POST['commentaire']);

if (!empty($_POST['pseudo'] & $_POST['email'] & $_POST['commentaire'])) {

    #--------------------------------- TEST!!!!! ---------------------------------
    // $result = $bdd->exec("INSERT INTO commentaires (date,pseudo,email,commentaire) VALUES ('21-03-2019 15:22:34', 'biss','assa.traore@lepoles.com','bien le site')")
    #------------------------------------------------------------------------------

    $result = $bdd->exec("INSERT INTO commentaires ( date, pseudo, email, commentaire ) VALUES ('$_POST[date]','$pseudo','$_POST[email]','$commentaire')");


    $tab['resultat'] = '<div class="col-md-6 offset-md-3 alert alert-success text-center"> Merci ' . $_POST['pseudo'] . ', Votre commentaire a bien été enregistré! <br> <a class="text-center" href="../index.php">Revenir sur mon site</a></div>'; 

 
    # message validé .. retour page index 
} else {
    $tab['resultat'] = '<div class="col-md-6 offset-md-3 alert alert-danger text-center"> Merci de renseigner les champs manquant !!</div>'; 
    # message non enregistré car manque des champs!
}
echo json_encode($tab); 
# On encode en JSON le tableau ARRAY, c'est la reponse de la requete AJAX, sans ce format de donnée, on ne pourrait vehiculer des données en HTTP
