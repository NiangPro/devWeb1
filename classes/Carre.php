<?php

class Carre{
    private $cote;

    public function __construct($cote){
        $this->cote = $cote;
    }

    public function perimetre(){
        echo "Perimetre = ".($this->cote*4)."<br>";
    }

    public function surface(){
        echo "Surface = ".($this->cote * $this->cote)."<br>";
    }

    public function afficheCalcul(){
        $this->perimetre();
        $this->surface();
    }
}


$c = new Carre(5);
$c2 = new Carre(6);

$c->afficheCalcul();
$c2->afficheCalcul();