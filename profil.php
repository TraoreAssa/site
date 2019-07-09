<section id='profil' class="p-50">
  <div class="card">
    <div class="about justify-content-center">
      <!-- div about = About avec effet -->
      <span>...</span>
      <span>A</span>
      <span>b</span>
      <span>ou</span>
      <span>t</span>
      <span>...</span> <br>
    </div>
    <!-- about -->

    <div class="content">
      <!-- content = contenu (image + texte presentation) -->
      <?php
      $resultat = $bdd->query("SELECT * FROM utilisateur WHERE id_utilisateur = 1");
      while ($utilisateur = $resultat->fetch(PDO::FETCH_ASSOC)) :
        # recuperation des champsn de l'id 1 de la table utilisateur dans la BDD

        //  ------------ AVATAR ------------
        $result = $bdd->query("SELECT photo FROM photo WHERE details = 'Avatar' ");
        # recuperation des champs de la table photo dans la BDD

        while ($photo = $result->fetch(PDO::FETCH_ASSOC)) {
          foreach ($photo as $key => $value) {
            echo '<img src ="' . $value . '" alt="Mon Avatar"  width="200" height="200"/>';
          }
        }
        ?>
        <!-- Afficher les éléments -->
        <h2 class='text-center'><?= $utilisateur['nom'] ?> <?= $utilisateur['prenom'] ?></h2>
        <span class='text-center'><?= $utilisateur['description'] ?></span>
        <a href="<?= $utilisateur['site_web'] ?>" target="_blank">Voir mon site CV</a>
        <br>

        <input type="button" value="CV en PDF" onclick="window.location='<?= $utilisateur['cv'] ?>'">

      <?php endwhile; ?>

      <!-- Reseaux Sociaux -->
      <div class="text-center">
        <a href="http://facebook.com" target="_blank"><i class="fab fa-facebook-square fa-3x p-3 text-white"></i></a>
        <a href="https://www.linkedin.com/in/assa-traore-911075173/" target="_blank"><i class="fab fa-linkedin fa-3x p-3 text-white"></i></a>
        <a href="https://github.com/TraoreAssa" target="_blank"><i class="fab fa-github-square fa-3x p-3  text-white"></i></a>
      </div>
      <!-- RS -->

    </div>
    <!-- content -->
  </div>
  <!-- card (rond) -->

  <!-- Poste -->
  <?php
  # recuperation des champs de la table titre-cv dans la BDD
  $resul = $bdd->query("SELECT titre_cv, description FROM titre_cv");
  while ($cv = $resul->fetch(PDO::FETCH_ASSOC)) {
    foreach ($cv as $key => $value) {
      echo '<h1 class="text-center titre">' . $value . ' </h1>';
    }
  }
  ?>

</section>
<!-- section profil -->