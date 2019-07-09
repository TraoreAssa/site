<?php
// echo '<pre>';    
// print_r($donnees); 
// echo '</pre>';
// var_dump($donnees);
// echo '<pre>';print_r($fields); echo '</pre>'; // description des champs 
// echo '<pre>';print_r($donnees); echo '</pre>';
function securiser($donnees)
{
    $donnees = trim($donnees); // efface les espaces en trop
    $donnees = strip_tags($donnees); //efface le HTML (ne s'affichera pas)
    $donnees = stripslashes($donnees); //efface les \

    return $donnees;
}
?>
<div>
    <a href="?op=add" class="btn btn-larg btn-dark"><i class="fas fa-plus"></i> Ajouter</a>
    <br>
</div> <br>

<div class="row justify-content-center">

    <!----------- Récuperer les données interieur du tableau ----------->
    <?php

    foreach ($donnees as $value) :
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