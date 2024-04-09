<?php

class Cavalier extends PieceEchecs {
    

    
    public function __construct(int $x, int $y, Couleur $couleur)
    {
        parent::__construct($x, $y, $couleur);

    }
    
    
    public function peutAllerA($x, $y){
        if ($x < 1 || $x > 8 || $y < 1 || $y > 8) {
           return false;
        }
        $dx = abs($this->getX() - $x);
        $dy = abs($this->getY() - $y);
        return $dx == 2 && $dy == 1 || $dx == 1 && $dy == 2;
    }
}