<?php


require_once './util/Couleurs.php';
require_once './entities/PieceEchecs.php';
require_once './entities/Cavalier.php';
require_once './entities/Dame.php';
require_once './entities/Fou.php';
require_once './entities/Pion.php';
require_once './entities/Roi.php';
require_once './entities/Tour.php';


$tour = new Pion(1, 1, Couleurs::Blanche);

if ($tour->peutAllerA(9,1)) {
    echo 'Le tour peut aller ici';
} else{
    echo 'Cette case n\'est pas accessible';
}

echo '<br>';
echo $tour;