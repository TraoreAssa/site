<?php
$resultat = $bdd->query("SELECT * FROM utilisateur");
# recuperation des champs de la table utilisateur dans la BDD

$utilisateur = $resultat->fetch(PDO::FETCH_ASSOC);
// echo '<pre>'; print_r($utilisateur); echo '</pre>'; 
?>
<main id="contact" name="contact" class='text-center'>

    <h2 class='display-4 text-center'>Contact</h2>

    <div class="row">
        <div class="col-lg-6 p-2">
            <p>
                <h3> <strong> Email :</strong> </h3><?= $utilisateur['email'] ?>
            </p>
            <br>
            <p>
                <h3> <strong> Téléphone :</strong> </h3><?= $utilisateur['telephone'] ?> <br />
            </p>
            <br>
            <p>
                <h3> <strong> Adresse :</strong> </h3><?= $utilisateur['adresse'] ?><br /> <?= $utilisateur['code_postal'] ?> <?= $utilisateur['ville'] ?> <br />
                <br>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2621.6412927008637!2d2.023014415904582!3d48.92222610416351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e689380e5454d1%3A0x4099c2bb5d1729b6!2s60+Avenue+du+Mar%C3%A9chal+Lyautey%2C+78300+Poissy!5e0!3m2!1sfr!2sfr!4v1553001708997" allowfullscreen></iframe>
            </p>
            <br>

        </div>
        <!-- Fin de Div .col-6 (Contact) -->

        <!-- FORMULAIRE DE CONTACT -->
        <div class="col-lg-6 p2">
            <p>
                <h3 class="text-center"> ME CONTACTER DIRECTEMENT PAR MAIL</h3>
                <br>
                <div class="resultat"></div>
            </p>

            <form class="contact-form php-mail-form text-center" methode="post" id="form">

                <label for="Nom">Nom</label>
                <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom">
                <!-- Nom -->
                <br>

                <label for="prenom">Prénom</label>
                <input type="text" name="Prénom" class="form-control" id="prenom" placeholder="prenom">
                <!-- Prénom -->
                <br>

                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email" data-rule="email">
                <!-- email -->
                <br>

                <label for="message">Message</label>
                <textarea class="form-control" name="message" id="message" placeholder="Message" rows="8"></textarea>
                <!-- message -->
                <br>

                <button type="submit" id="envoi" class="mb-3" id="envoi">Envoyer</button>
                <!-- button Envoi Message -->
                <br>

            </form>
            <!-- fin du formilaire de contact -->

        </div>
        <!-- div col-6 (formulaire de contact) -->
    </div>
    <!-- div row  -->

</main>
<!-- main contact -->

<!-- JS -->
<script src="contact/contact.js"></script>
