<?php

class Pion extends PieceEchecs {
    

    
    // public function __construct(int $x, int $y, string $couleur)
    // {
    //     parent::__construct($x, $y, $couleur);

    // }
    
    
    public function peutAllerA($x, $y){
        // $dx = abs($this->x - $x);
        // $dy = abs($this->y - $y);
        return ($this->x == $x && $this->y+1 == $y  || $this->x == $x && $this->y+2 == $y) && ($this->estDansEchiquier($x,$y));
        
    }

    public function __toString()
    {
        return 'Je suis un Cavalier et je me trouve en : (x:' .$this->x . "), (y: " . $this->y . ") et je suis de couleur : (" . $this->couleur->value . ')';
    }

}