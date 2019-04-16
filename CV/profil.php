<?php
require_once('init/init.php');
//BDD
?>



<section id='profil' class="p-50">
  <div >

    <div class="row justify-content-center">
      <div class="card rounded-circle" style='width: 30rem; height:30rem'>
        <div class="img justify-content-center">
           <span>Pré</span>
           <span>sen</span>
           <span>ta</span>
           <span>tion:</span>
        
        </div>
        <div class="content">
          <?php
                $resultat = $bdd->query("SELECT * FROM utilisateur WHERE id_utilisateur = 1");
          while ($utilisateur = $resultat->fetch(PDO::FETCH_ASSOC)) :

            //  ------------ AVATAR ------------
            $result = $bdd->query("SELECT photo FROM photo WHERE details = 'Avatar' ");
            // var_dump($result) ; 

            while ($photo = $result->fetch(PDO::FETCH_ASSOC)) {
              foreach ($photo as $key => $value) {
                echo '<img src ="' . $value . '" alt="Mon Avatar"  width="200" height="200"/>';
              }
            }

          ?>

          <h2 class='display-3'><?= $utilisateur['nom'] ?> <?= $utilisateur['prenom'] ?></h2>
          <a href="<?= $utilisateur['site_web'] ?>"> Voir mon site CV 2</a>
          <br>
          
          <input type="button" class='bg-dark text-white p-2' value="Télécharger mon CV en PDF"
            onclick="window.location='<?= $utilisateur['cv'] ?>'">



          <?php endwhile; ?>

        </div>
      </div>
    </div>
  </div>
  </div>




</section>


<?php
// ---------------------------- Recuperation Des champs de la BDD --------

//  ------------ titre ------------
  $resul = $bdd->query("SELECT titre_cv, description FROM titre_cv");
  while ($cv = $resul->fetch(PDO::FETCH_ASSOC)) {
    foreach ($cv as $key => $value) {
      echo '<h1 class="text-center">' .$value. ' </h1> <br>';
    }
  }

?>

<p class="text-center site">Bienvenue sur mon Site-PortFolio <br></p>




<?php
// require_once('init/footer.php');
//Footer
?>