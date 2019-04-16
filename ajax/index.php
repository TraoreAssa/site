<div class="container">

    <?php
    require_once('init/init.php');
    // var_dump($resultat);

    //------------------REQUETE RETOUR------------------------
    ?>


    <section id="commentaires">
        <h2 class='display-4 text-center'>Commentaires</h2>

        <!-- <div class="card"> -->

        <div class="card-header">
            <h5 class="text-center">Votre avis m'interesse ! <br> Laissez un petit commentaire</h5>
            <button type="submit" id="ajouter" class="btn btn-dark">Ajouter un commentaire</button>
        </div>

        <div class="row">
            <?php
            // ---------------------------- Recuperation des champs de la BDD --------
            $pseudo = $commentaire = "";

            function securiser($donnees)
            {
                $donnees = trim($donnees);
                $donnees = stripslashes($donnees);
                $donnees = strip_tags($donnees);
                return $donnees;
            }

            $resultat = $bdd->query("SELECT pseudo, email, commentaire, date FROM commentaires ORDER BY date DESC LIMIT 6");
            while ($commentaires = $resultat->fetch(PDO::FETCH_ASSOC)) :
                // $new = htmlspecialchars($comm, ENT_QUOTES);
                // var_dump($commentaires['pseudo'])

             

                $pseudo = securiser($commentaires['pseudo']);
                $commentaire = securiser($commentaires['commentaire']);
                ?>

                <div class='card-body'>
                    <blockquote class='blockquote'>
                        <p>
                            <div class='card'>
                                <div class='card-body'>
                                    <h5 class='card-title text-center'> Commentaire de <font style="text-transform: uppercase;"> <em> <?= $pseudo ?>
                                            </em> </font>
                                    </h5>
                                    <p class='card-text'> <?= $commentaire ?></p>
                                </div>
                            </div>
                        </p>
                        <div class='blockquote-footer text-center'>
                            <cite title='Source Title'> Commentaire poster le : <?= $commentaires['date'] ?></cite>
                        </div>
                    </blockquote>
                </div>

            <?php endwhile; ?>
            <!-- </div> -->
        </div>
    </section>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="ajax/com.js"></script>