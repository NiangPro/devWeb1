<?php
    class Client{
        private $prenom;
        private $nom;
        private $adresse;
        private $tel;

    public function __construct($prenom, $nom, $adresse, $tel){
        $this->prenom=$prenom;
        $this->nom=$nom;
        $this->adresse=$adresse;
        $this->tel=$tel;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function getNom(){
        return $this->nom;
    }
    
    public function getAdresse(){
        return $this->adresse;
    }

    public function getTel(){
        return $this->tel;
    }

}

?>