<?php

class Cavalier extends PieceEchecs {
    
    public function __construct()
    {
        parent::__construct();

    }
    
    
    public function peutAllerA(){
        // from 'point de départ'
        // $x $x $y || $x $x -$y || $y $y $x || $y $y -$x
        // sauf si 'piece de meme couleur sur la case'
        // sauf si la piece sort du jeu
    }
}