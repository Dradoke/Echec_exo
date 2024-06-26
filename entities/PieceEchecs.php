<?php

require_once './util/Couleurs.php';

abstract class PieceEchecs
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
    public function setCouleur(Couleurs $couleur)
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
    public function setY(int $y)
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
    public function setX(int $x)
    {
        if ($x >= 1 && $x <=8) {
            $this->x = $x;
        } else {
            throw new Exception("La case $x n'existe pas sur l'échiquier");
            
        }
    }


   public function getCouleurCase()
   {
    return (($this->x + $this->y)%2 == 1 ? Couleurs::Blanche->value : Couleurs::Noire->value);
   }

   public function estDansEchiquier($x, $y)
   {
     return (($y >=1) && ($y <=8) && ($x >=1) && ($x <=8));
   }

   public function __toString()
    {
        return 'Je suis un ' . get_class($this) .' et je me trouve en : (x:' .$this->x . "), (y: " . $this->y . ") et je suis de couleur : (" . $this->couleur->value . ')';
    }

   abstract public function peutAllerA($x,$y);
}
