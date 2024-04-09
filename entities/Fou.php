<?php

class Fou extends PieceEchecs {
    

    
    public function __construct(int $x, int $y, Couleur $couleur)
    {
        parent::__construct($x, $y, $couleur);

    }

    
    function peutAllerA($x, $y) {
        return abs($this->getX() - $x) == abs($this->getY() - $y) && $x >= 1 && $x <= 8 && $y >= 1 && $y <= 8;
    }
    

}