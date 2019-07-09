<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

    <!-- JS -->
    <script src="ajax/com.js"></script>

    <?php
    require_once('../init/style.php');

    ?>

    <title>AJOUTER UN COMMENTAIRE </title>
</head>

<body>

    <div class="container">
        <h3 class="display-4 text-center m-4"> Ajouter un nouveau Commentaire : </h3>

        <div id="resultat"></div>
        <!-- le message s'affiche ici (si commentaire ok ou si il manque des champs) -->


        <form methode="post" id="formulaire" class="col-md-6 offset-md-3 my-3">
            <div class="form-group">

                <label for="Pseudo">Pseudo</label>
                <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Votre pseudo">
                <br>

                <label for="Email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Votre email">
                <small id="emailHelp" class="form-text text-muted">Votre email restera privé</small>
                <!-- email -->
                <br>

                <label for="date">Date et Heure</label>
                <input type="text" class="form-control text-center" id="date" name="date" value=" <?= date('d-m-Y - H:i') ?> " readonly>
                <!-- Date -->
                <br>

                <label for="Commentaire">Commentaire</label>
                <textarea id="commentaire" class="form-control" name="commentaire" placeholder="Votre commentaire" rows="10"></textarea>
                <!-- Message -->
                <br>

                <p class="text-center">
                    <button type="submit" id="insert" class="btn btn-dark">Ajouter</button>
                    <!-- Envoyer le com -->
                    <button type="submit" id="annuler" class="btn btn-dark">Annuler</button>
                    <!-- Revenir au site -->
                </p>

            </div>
            <!-- Fin de la div from-group -->

    </form>
    <!-- Form -->
</body>

</html>