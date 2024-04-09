<?php

require_once './util/Couleurs.php';

class PieceEchecs
{

    private $x;
    private $y;
    private $couleur;


    public function __construct(int $x, int $y, string $couleur){

        $this->setX($x);
        $this->setY($y);
        $this->setCouleur($couleur);
       
    }


    /**
     * Get the value of couleur
     */ 
    public function getCouleur()
    {
        return $this->couleur;
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
        $this->y = $y;

        return $this;
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
        $this->x = $x;

        return $this;
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
