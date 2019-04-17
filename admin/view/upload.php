    <?php

    // echo '<pre>';    
    // print_r($_FILES); //l'image se stock dans $_FILES
    // echo '</pre>';    

    $bdd = new PDO('mysql:host=localhost;dbname=siteportfolio', 'root', '');

    // if(!empty($_FILES['image']['name']))
    if (!empty($_FILES['photo']['name'])) {
        $nom_photo = $_FILES['photo']['name'];
        // $nom_photo = uniqid() . '-' . $_FILES['photo']['name'];
        //uniqid() permet de définir un identifiant unique
        // echo 'nom photo :' . $nom_photo . '<br>'; //Nom de la photo

        $photoBdd = "http://localhost/Cours/SitePortfolio/image/$nom_photo";
        // $photoBdd = "http://localhost/Cours/SitePortfolio/admin/img/$nom_photo";
        // $photoBdd = "http://localhost/support_poissy_2018/support-poissy-2018/Site-Portfolio/admin/img/$nom_photo";
        //on déclare l'URL de la photo/image  qui sera conservé dans la BDD
        // echo 'Photo Bdd : ' . $photoBdd . '<br> <br>'; //URL de l'image 

        $photoDossier = $_SERVER['DOCUMENT_ROOT'] . "/Cours/SitePortfolio/image/$nom_photo";
        // $photoDossier = $_SERVER['DOCUMENT_ROOT'] . "/Cours/SitePortfolio/admin/img/$nom_photo";
        // $photoDossier = $_SERVER['DOCUMENT_ROOT'] . "/support_poissy_2018/support-poissy-2018/Site-Portfolio/admin/img/$nom_photo";
        //On déclare le chemin physique de la photo, ou elle sera stockée
        // echo 'Dossier photo : ' . $photoDossier . '<br> <br>';

        copy($_FILES['photo']['tmp_name'], $photoDossier);
        //Permet de copier la photo / image dans le dossier sur le serveur

        $resultat = $bdd->exec("INSERT INTO photo (photo) VALUES ('$photoBdd')");
        //Insert en BDD de l'URL de l'image / photo. On ne conserve jamais l'image elle même dans la BDD, ce sreait trop lourd pour le serveur

    }

    ?>

    <form method="post" class="col-md-6 offset-md-3 text-center">
        <?php

        // echo "<pre>";
        // print_r($fields);
        // echo "</pre>";


        foreach ($fields as $value) :
            if ($value['Field'] == "photo") {
                $type = 'file';
            } else {
                $type = "text";
            }



            ?>
            <div class="form-group">
                <label for="<?= $value['Field'] ?>"><?= $value['Field'] ?></label>
                <input type="<?= $type ?>" class="form-control" name="<?= $value['Field'] ?>" id="<?= $value['Field'] ?>" aria-describedby="<?= $value['Field'] ?>" placeholder="<?= $value['Field'] ?>" required>

            <?php endforeach; ?>

        </div>

        <button type="submit" class="col-md-6 btn btn-info mb-5">Upload</button>

    </form>

    <div class="justify-content-center">

        <!------------------------------ Récuperer les données ------------------------------>

        <?php

        foreach ($donnees as $value) :

            ?>
            <div class="card ">
                <div class="card-body">
                    <div>
                        <p>
                            <?= implode('</p><p>', $value) ?>
                        </p>
                        <p>
                            <img src="<?= $value['photo'] ?>" alt="<?= $value['details'] ?>">
                        </p>
                        <p class="text-center">
                            <span class="p-2"> <a href="?op=select&id=<?= $value[$id] ?>"><i class="fas fa-search fa-2x"></i></a></span>

                            <span class="p-2"> <a href="?op=update&id=<?= $value[$id] ?>"><i class="fas fa-pen fa-2x"></i></a></span>

                            <span class="p-2"> <a href="?op=delete&id=<?= $value[$id] ?>"><i class="fas fa-times fa-2x"></i></a></span>
                        </p>
                    </div>



                </div>
            </div>
        <?php endforeach; ?>
