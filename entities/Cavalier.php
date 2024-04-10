<?php

class Cavalier extends PieceEchecs {
    

    
    // public function __construct(int $x, int $y, string $couleur)
    // {
    //     parent::__construct($x, $y, $couleur);

    // }
    
    
    public function peutAllerA($x, $y){
        if ($x < 1 || $x > 8 || $y < 1 || $y > 8) {
           return false;
        }
        $dx = abs($this->x - $x);
        $dy = abs($this->y - $y);
        return $dx == 2 && $dy == 1 || $dx == 1 && $dy == 2;
    }

    public function __toString()
    {
        return 'Je suis un Cavalier et je me trouve en : (x:' .$this->x . "), (y: " . $this->y . ") et je suis de couleur : (" . $this->couleur->value . ')';
    }

}