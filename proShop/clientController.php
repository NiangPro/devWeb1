<?php
    require_once('classes/database.php');
    require_once('classes/client.php');
    $db = new Database();

    $clients = $db->listClient();

    if(isset($_POST['valider'])){
        extract($_POST);
        if (!empty($prenom) && !empty($nom) && !empty($adresse) && !empty($tel)) {
            $cli = new Client($prenom, $nom, $adresse, $tel); 
            if($db->addUser($cli)){
                $clients = $db->listClient();
            }
        }
    }
    
    require_once('listClient.php');
?>