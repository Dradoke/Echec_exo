<?php
require_once './entities/PieceEchecs.php';


class Fou extends PieceEchecs {
    

    
    // public function __construct(int $x, int $y, string $couleur)
    // {
    //     parent::__construct($x, $y, $couleur);

    // }

    
    function peutAllerA($x, $y) {
        return abs($this->x - $x) == abs($this->y - $y) && ($this->estDansEchiquier($x,$y));
    }
    
}