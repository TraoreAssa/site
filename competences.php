<?php

$resultat = $bdd->query("SELECT * FROM realisations");
# recuperation des champs de la table realisations dans la BDD

$result = $bdd->query("SELECT * FROM photo");
# recuperation des champs de la table photo dans la BDD
?>
<main id='competences'>

    <h2 class='display-4 text-center' id='competence'>Mes Compétences</h2>
    <p>cliquez sur les images pour voir certaines de mes realisations / maquettes</p>
    <ul class="comp">

        <div class='row justify-content-center'>
            <div class="card">
                <li>
                    <img onclick="" src="image/html-css.jpg" title="Clique pour voir mes Réalisations en HTML - CSS" id="HTML">
                </li>
            </div>
            <!-- Card -->

            <div class="card">
                <li>
                    <img onclick="" src="image/js.jpg" title="Clique pour voir mes Réalisations en JS" id="JS">
                </li>
            </div>
            <!-- Card -->

            <div class="card">
                <li>
                    <img onclick="" src="image/gimp.jpeg" title="Clique pour voir mes Réalisations en GIMP" id="GIMP">
                </li>
            </div>
            <!-- Card -->

        </div>
        <!-- div .row -->
    </ul>

    <h2 class='display-4 text-center'>Autres competences</h2>
    <div class="row justify-content-center">

        <?php
        while ($realisation = $resultat->fetch(PDO::FETCH_ASSOC)) :
            ?>
            <div class="text-center col">
                <p><strong><?= $realisation['competences'] ?></strong> <br>
                    <?= $realisation['date_rea'] ?> </p>
            </div>

        <?php endwhile; ?>
    </div>
    <!-- div .row -->

</main>
<!-- main competences -->

<script src="ajax/script.js"></script>