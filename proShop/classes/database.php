<?php
    class Database{
        private $db;

        public function __construct($dbname="shop"){
            try {
                $this->db = new \PDO("mysql:dbname=$dbname;host=localhost", "root", "");
            } catch (\PDOException $e) {
                die($e->getMessage());
            }
        }

        public function getDb(){
            return $this->db;
        }

        public function addUser(Client $cli){
        try {
            $q =  $this->getDb()->prepare("INSERT INTO client VALUES(null, :prenom, :nom, :adresse, :tel)");

           $response = $q->execute([
             'prenom' => $cli->getPrenom(),
             'nom' => $cli->getNom(),
             'adresse' => $cli->getAdresse(),
             'tel' => $cli->getTel()
           ]);
        } catch (\PDOException $m) {
            die($m->getMessage());
        }
           return $response;
        }

        public function listClient(){
            try {
                $q = $this->getDb()->prepare("SELECT * FROM CLIENT");

                $response = $q->execute();
            } catch (\PDOException $m) {
                die($m->getMessage());
            }

            return $q->fetchAll(PDO::FETCH_OBJ);
        }
    }
?>