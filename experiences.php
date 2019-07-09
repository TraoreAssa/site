<?php
  $resultat = $bdd->query("SELECT * FROM experiences ORDER BY date_debut DESC");
  # recuperation des champs de la table experiences dans la BDD
?>

  <main id='experiences'>
    <h2 class='display-4 text-center'> Mes Expériences</h2>

    <div class="row justify-content-center">
      <?php
        while ($experiences = $resultat->fetch(PDO::FETCH_ASSOC)) :
        # Avoir une carré pour chaque experiences 
      ?>

        <div class='card m-1 text-center'>

          <div class='card-body'>
            
            <i class="fas fa-suitcase fa-3x"></i> <br>
            <h4 class='card-title'><?= $experiences['poste'] ?></h4>
            <h6 class='card-subtitle mb-2 text-muted'><?= $experiences['entreprise'] ?></h6>
            <p class='card-text'><?= $experiences['date_debut'] ?> à <?= $experiences['date_fin'] ?></p>
            <p class='card-text'><?= $experiences['description'] ?></p>

          </div>
          <!-- Card-body -->

        </div>
        <!-- div card -->

      <?php endwhile; ?>

    </div>
    <!-- row -->

  </main>
  <!-- main experiences -->
