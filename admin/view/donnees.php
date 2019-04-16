<?php
// echo '<pre>';    
// print_r($donnees); 
// echo '</pre>';
// var_dump($donnees);
// echo '<pre>';print_r($fields); echo '</pre>'; // description des champs 
// echo '<pre>';print_r($donnees); echo '</pre>';


?>
<div>
    <a href="?op=add" class="btn btn-larg btn-dark"><i class="fas fa-plus"></i> Ajouter</a>
    <br>
</div> <br>


<div class="row justify-content-center">

    <!----------- Récuperer les données interieur du tableau ----------->
    <?php
    foreach ($donnees as $value) :

        // if ($fields == 'mdp') {
        //     $value['Field']= password_hash($value, PASSWORD_DEFAULT);

        // }
        ?>

        <div class="card">
            <div class="card-body">
                <div>
                    <p class="text-left">
                        <?= implode('</p><p>', $value) ?>
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
</div>