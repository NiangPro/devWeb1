<?php
class Produit{
    private $nom;
    private $pu;
    private $qte;
    private $image;

    public function __construct($nom, $pu, $qte, $image){
        $this->nom = $nom;
        $this->pu = $pu;
        $this->qte = $qte;
        $this->image = $image;
    }

    public function getNom(){return $this->nom;}
    public function getPu(){return $this->pu;}
    public function getQte(){return $this->qte;}
    public function getImage(){return $this->image;}
}