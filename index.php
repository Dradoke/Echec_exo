<?php


require_once './util/Couleurs.php';
require_once './entities/PieceEchecs.php';
require_once './entities/Cavalier.php';
require_once './entities/Dame.php';
require_once './entities/Fou.php';
require_once './entities/Pion.php';
require_once './entities/Roi.php';


$cavalier = new Cavalier(1, 1, Couleurs::BLANC);


echo $cavalier;

