<?php

class Person{
    protected $prenom;
    public $nom;
    public $age;
    public static $nbre = 0;
    public const PI = 3.12;

    public function __construct($prenom, $nom){
        $this->prenom = $prenom;
        $this->nom = $nom;
        self::$nbre++;

        echo self::PI;
    }

    public function marcher(){
        echo "je marche";
    }
}