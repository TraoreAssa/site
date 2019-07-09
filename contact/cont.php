<?php
$tab = array();
// $tab['error'] = 'formulaire non valide';

// if (!filter_var($_POST['email'], FILTER_VALInom_EMAIL)) {
//     $tab['email_invalide'] = 'email_invalide';
// }
// else{
//     $tab['error'] = "ok";
//     $nom = $_POST["nom"];
//     $prenom = $_POST["prenom"];
//     $sujet = $_POST["sujet"];
//     $email = $_POST["email"];
//     $message = $_POST["message"];


//     $moi = 'assa.traore@lepoles.com ' .$email;
//     $objet = "Message de mon site Portfolio";
//     $msg = $message;
//     //mail($moi, $objet, $msg);

// }

// echo json_encode($e);





require_once('../init/init.php');


//------------------REQUETE ALLER------------------------
$nom = addslashes($_POST['nom']);
$prenom = addslashes($_POST['prenom']);
$email = addslashes($_POST['email']);
$message = addslashes($_POST['message']);

if (!empty($_POST['nom'] & $_POST['prenom']) & $_POST['email'] & $_POST['message'] ) {

    #--------------------------------- TEST!!!!! ---------------------------------
    $result = $bdd->exec("INSERT INTO contact (nom,prenom,email,message) VALUES ('Assa', 'Traore','assa.traore@lepoles.com','bien le site')");
    #------------------------------------------------------------------------------

    // $result = $bdd->exec("INSERT INTO contact ( nom, prenom, email, message ) VALUES ('$nom','$prenom','$email','$message')");


    $tab['resultat'] = '<div class="col-md-6 offset-md-3 alert alert-success text-center"> Merci ' . $_POST['prenom'] . ', Votre message a bien été enregistré!</div>'; 
    # message validé .. retour page index 
} else {
    $tab['resultat'] = '<div class="col-md-6 offset-md-3 alert alert-danger text-center"> Merci de renseigner les champs manquant !!</div>'; 
    # message non enregistré car manque des champs!
}
echo json_encode($tab); // On encode en JSON le tableau ARRAY, c'est la reponse de la requete AJAX, sans ce format de donnée, on ne pourrait vehiculer des données en HTTP
