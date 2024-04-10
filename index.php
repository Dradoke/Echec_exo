<?php


require_once './util/Couleurs.php';
require_once './entities/PieceEchecs.php';
require_once './entities/Cavalier.php';
require_once './entities/Dame.php';
require_once './entities/Fou.php';
require_once './entities/Pion.php';
require_once './entities/Roi.php';


$cavalier = new Cavalier(8, 8, Couleurs::Blanche);

if ($cavalier->peutAllerA(6,7)) {
    echo 'Le cavalier peut aller ici';
} else{
    echo 'Cette case n\'est pas accessible';
}


