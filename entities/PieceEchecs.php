<?php

require_once './util/Couleurs.php';

class PieceEchecs
{

    protected $x;
    protected $y;
    protected $couleur;


    public function __construct(int $x, int $y, Couleurs $couleur){

        $this->setX($x);
        $this->setY($y);
        $this->setCouleur($couleur);
       
    }


    /**
     * Get the value of couleur
     */ 
    public function getCouleur()
    {

        return $this->couleur->value;
    }

    /**
     * Set the value of couleur
     *
     * @return  self
     */ 
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get the value of y
     */ 
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set the value of y
     *
     * @return  self
     */ 
    public function setY($y)
    {
        if ($y >= 1 && $y <=8) {
            $this->y = $y;
        } else {
            throw new Exception("La case $y n'existe pas sur l'échiquier");
            
        }
    }

    /**
     * Get the value of x
     */ 
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set the value of x
     *
     * @return  self
     */ 
    public function setX($x)
    {
        if ($x >= 1 && $x <=8) {
            $this->x = $x;
        } else {
            throw new Exception("La case $x n'existe pas sur l'échiquier");
            
        }
    }


   public function getCouleurCase()
   {

    if (($this->x + $this->y)%2 == 1) {
        echo 'case blanche (impair)';
    } else {
        echo 'case noire (pair)';
    }

   }

}
