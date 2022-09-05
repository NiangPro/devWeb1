<?php 

class Produit{
    private $nom;
    private $prix_unitaire;
    private $quantite;

    public function __construct($nom, $pu, $qte){
        $this->nom = $nom;
        $this->prix_unitaire = $pu;
        $this->quantite = $qte;
    }
    public function getNom(){
        return $this->nom;
    }

    public function getPu(){
        return $this->prix_unitaire;
    }

    public function getQuantite(){
        return $this->quantite;
    }
}