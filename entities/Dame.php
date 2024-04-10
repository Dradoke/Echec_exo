<?php

class Dame extends PieceEchecs {
    

    
    public function __construct(int $x, int $y, string $couleur)
    {
        parent::__construct($x, $y, $couleur);

    }
    
    
    public function peutAllerA($x, $y){
        // Determine si le pion est sur le jeu
        if ($x < 1 || $x > 8 || $y < 1 || $y > 8) {
           return false;
        }
        $dx = abs($this->getX() - $x);
        $dy = abs($this->getY() - $y);
        for ($i=0; $i < 8; $i++) { 
            return $dx == 1 && $dy == 1 || $dx == 1 && $dy == 2;
            
        }
    }

    public function __toString()
    {
        return 'Je suis un Cavalier et je me trouve en : (x:' .$this->getX() . "), (y: " . $this->getY() . ") et je suis de couleur : (" . $this->getCouleur() . ')';
    }

}