<?php

class Cavalier extends PieceEchecs {
    

    
    // public function __construct(int $x, int $y, string $couleur)
    // {
    //     parent::__construct($x, $y, $couleur);

    // }
    
    
    public function peutAllerA($x, $y){
        $dx = abs($this->x - $x);
        $dy = abs($this->y - $y);
        return ($dx == 2 && $dy == 1 || $dx == 1 && $dy == 2) && ($this->estDansEchiquier($x,$y));
        
    }



}