<main id='formations'>
  <h2 class='display-4 text-center'>Mes Formations</h2>

  <div class="row justify-content-center">

    <?php
      $resultat = $bdd->query("SELECT * FROM formations ORDER BY date_debut DESC ");
      while ($formations = $resultat->fetch(PDO::FETCH_ASSOC)) :
      # recuperation des champs de la table formations dans la BDD
    ?>

    <div class='card m-2 p-4 text-center rounded-circle'>
        <div class='card-body'>
          <i class="fas fa-graduation-cap fa-3x p-1x"></i> <br>
          <h4 class='card-title'><?= $formations['titre'] ?></h4>
          <h6 class='card-subtitle mb-2 text-muted'><?= $formations['lieu'] ?></h6>
          <p class='card-text'><?= $formations['date_debut'] ?> à <?= $formations['date_fin'] ?></p>
          <p class='card-text'><?= $formations['description'] ?></p>

        </div>
        <!-- Card-body -->
      </div>
      <!-- Card -->

    <?php endwhile; ?>

  </div>
  <!-- row -->

</main>
<!-- main Formations -->
