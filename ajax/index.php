<!-- <div class="container"> -->

    <?php
    // require_once('../init/header.php');
    // header

    // require_once('../init/init.php');
    // BDD
    // var_dump($resultat);

    //------------------REQUETE RETOUR------------------------
    ?>

    <main id="commentaires">
        <h2 class='display-4 text-center'>Commentaires</h2>

        <div class="card-header">
            <h5 class="text-center">Votre avis m'interesse ! <br> Lachez un petit commentaire</h5>
            <button type="submit" id="ajouter" class="btn btn-dark">Ajouter un commentaire</button>
        </div>

        <div class="row">
            <?php
            // ---------------------------- Recuperation des champs de la BDD --------
            $pseudo = $commentaire = "";

            function securiser($donnees)
            {
                $donnees = trim($donnees); // efface les espaces en trop
                $donnees = strip_tags($donnees); //efface le HTML (ne s'affichera pas)
                $donnees = stripslashes($donnees); //efface les \

                return $donnees;
            }

            $resultat = $bdd->query("SELECT pseudo, email, commentaire, date FROM commentaires ORDER BY date DESC LIMIT 10");
            while ($commentaires = $resultat->fetch(PDO::FETCH_ASSOC)) :
                // var_dump($commentaires['pseudo'])


                $pseudo = securiser($commentaires['pseudo']);
                $commentaire = securiser($commentaires['commentaire']);
                ?>

                <div class='card-body col-6'>
                    <blockquote class='blockquote'>
                    <div class='blockquote-footer text-center'>
                            <cite title='Source Title'> Commentaire posté le : <?= $commentaires['date'] ?> </cite>
                        </div>
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
                        
                    </blockquote>
                </div>

            <?php endwhile; ?>

        </div>

    </main>
<!-- </div> -->
<!-- div container -->

<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="ajax/com.js"></script>