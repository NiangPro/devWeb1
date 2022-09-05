<?php

class Cercle{
    private $rayon;
    public const PI= 3.14;

    public function __construct($rayon){
        $this->rayon = $rayon;
    }

    public function perimetre(){
        echo "<br>Perimetre = ".(self::PI*2*$this->rayon)."m";
    }

    public function surface(){
        echo "<br>Surface = ".(self::PI*$this->rayon*$this->rayon)."m<sup>2</sup>";
    }
}

$c = new Cercle(4);

$c->surface();