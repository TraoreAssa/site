<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Site Portfolio 2019</title>

  <!-- Font Awseome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

  <script src="ajax/script.js"></script>
  <script src="contact/contact.js"></script>

</head>

<?php
require_once('init/init.php');
//BDD
require_once('init/style.php');
//CSS 
?>

<body>
  <!-- Profil -->
  <section id="profil">
    <?php
    require_once('profil.php');
    ?>
    <!-- Navigation -->
    <nav>
      <ul>
        <li><a class="js-scrollTo" href="#profil">Profil</a></li>
        <li><a class="js-scrollTo" href="#experiences">Experiences</a></li>
        <li><a class="js-scrollTo" href="#competences">Compétences</a></li>
        <li><a class="js-scrollTo" href="#formations">Formations</a></li>
        <li><a class="js-scrollTo" href="#contact">Contact</a></li>
        <li><a class="js-scrollTo" href="#avis">Avis</a></li>
      </ul>
    </nav>

  </section>
  <!-- Fin Profil + nav -->

  <!-- Section Experiences -->
  <section id="experiences">

    <ul class="menu">

    <!-- Revenir a la section d'avant  -->
      <li><a class="js-scrollTo haut" href="#profil"><i class="fas fa-angle-double-up"></i> Profil <i class="fas fa-angle-double-up"></i> </a></li>

      <?php
      require_once('experiences.php');
      ?>

    <!-- Aller a la section d'apres  -->
      <li><a class="js-scrollTo bas" href="#competences"> <i class="fas fa-angle-double-down"></i> Compétences <i class="fas fa-angle-double-down"></i></a></li>

    </ul>
  </section>
  <!-- Fin d'Experiences -->

  <!-- Section Compétences -->
  <section id="competences">
    <ul class="menu">

    <!-- Revenir a la section d'avant  -->
      <li><a class="js-scrollTo haut" href="#experiences"><i class="fas fa-angle-double-up"></i> Experiences <i class="fas fa-angle-double-up"></i></a></li>

      <?php
      require_once('competences.php');
      ?>

      <li><a class="js-scrollTo bas" href="#formations"><i class="fas fa-angle-double-down"></i> Formations <i class="fas fa-angle-double-down"></i></a></li>

    </ul>
  </section>
  <!-- Fin Compétences -->

  <!-- Section Formations -->
  <section id="formations">
    <ul class="menu">

    <!-- Revenir a la section d'avant  -->
      <li><a class="js-scrollTo haut" href="#competences"><i class="fas fa-angle-double-up"></i> Compétences <i class="fas fa-angle-double-up"></i></a></li>

      <?php
      require_once('formations.php');
      ?>

      <li><a class="js-scrollTo bas" href="#contact"><i class="fas fa-angle-double-down"></i> Contact <i class="fas fa-angle-double-down"></i></a></li>

    </ul>
  </section>
  <!-- Fin Formations -->

  <!-- Section Contact -->
  <section id="contact">
    <ul class="menu">

    <!-- Revenir a la section d'avant  -->
      <li><a class="js-scrollTo haut" href="#formations"><i class="fas fa-angle-double-up"></i> Formations <i class="fas fa-angle-double-up"></i></a></li>

      <?php
      require_once('contact/contact.php');
      ?>

      <!-- <li><a class="js-scrollTo bas" href="#avis"><i class="fas fa-angle-double-down"></i> Avis <i class="fas fa-angle-double-down"></i></a></li> -->

    </ul>
  </section>
  <!-- Fin Contact -->

  <!-- Section Avis -->
  <!-- <section id="avis">
    <ul class="menu">

      <li><a class="js-scrollTo haut" href="#contact"><i class="fas fa-angle-double-up"></i> Contact <i class="fas fa-angle-double-up"></i></a></li>
     
      <?php
      // require_once('ajax/index.php');
      ?>

    </ul>
  </section> -->
  <!-- Fin Avis -->

  <footer class=" footer text-center text-white p-2">
    &copy; 2019 - Assa TRAORE - Mon site Portfolio <span class="text-white"> <a href="admin/index.php">.</a></span>
  <!-- Reseaux Sociaux -->
  <div class="text-center">
        <a href="http://facebook.com" target="_blank"><i class="fab fa-facebook-square fa-3x p-3 text-white"></i></a>
        <a href="https://www.linkedin.com/in/assa-traore-911075173/" target="_blank"><i class="fab fa-linkedin fa-3x p-3 text-white"></i></a>
        <a href="https://github.com/TraoreAssa" target="_blank"><i class="fab fa-github-square fa-3x p-3  text-white"></i></a>
        <a href="https://github.com/TraoreAssa" target="_blank"><i class="fab fa-github-square fa-3x p-3  text-white"></i></a>
      </div>
      <!-- RS -->
  
  </footer>

</body>

</html>