<?php

class Tour extends PieceEchecs {
    

    
    // public function __construct(int $x, int $y, string $couleur)
    // {
    //     parent::__construct($x, $y, $couleur);

    // }
    
    
    public function peutAllerA($x, $y){
        // $dx = abs($this->x - $x);
        // $dy = abs($this->y - $y);
        return ($this->x != $x && $this->y == $y  || $this->x == $x && $this->y != $y) && ($this->estDansEchiquier($x,$y));
        
    }

}