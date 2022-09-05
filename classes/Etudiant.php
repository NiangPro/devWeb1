<?php
    require_once("Person.php");

    class Etudiant extends Person{
        
        public function __construct($prenom , $nom, $age){
            parent::__construct($prenom, $nom);
            $this->age = $age;
        }

 

        public function affiche(){
            echo $this->nom;
        }

        public function setPrenom($prenom){
            $this->nom = $prenom;
        }
    }