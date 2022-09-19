<?php require("views/partials/_header.php");

    // connexion a la base de donnees
    try{

        $db =  new PDO("mysql:host=localhost;dbname=gesSchool", "root");

        $db->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

        // requete selection
        $req = $db->prepare("SELECT * FROM SALLE");

        $req->execute();

        
        // $req = $db->query("SELECT * FROM SALLE");
        
        // format tableau 
        $salles = $req->fetchAll();
        // sous format objet 
        // $salles = $req->fetchAll(PDO::FETCH_OBJ);
        $q = $db->prepare("SELECT * FROM SALLE WHERE id=:id");
        $q->execute(['id' => 3]);

        var_dump($q->fetch());
    }catch(PDOException $e){
        die("Erreur :".$e->getMessage());
    }
?>
    <h1>Liste des salles</h1>
    <table class="table table-bordered">
        <thead>
            <tr>

                <th>Identifiant</th>
                <th>Nom</th>
                <th>Nombre de places</th>
            </tr>
        </thead>
        <tbody>
            <?php  foreach($salles as $s): ?>
            <tr>
                <!-- sous format tableau  -->
                <!-- <td scope="row"><?php // $s['id'] ?></td>
                <td><?php  //$s['nom'] ?></td>
                <td><?php // $s['taille'] ?></td> -->

                <!-- sous format objet  -->
                <td scope="row"><?= $s->id ?></td>
                <td><?= $s->nom ?></td>
                <td><?= $s->taille ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php require_once('views/partials/_footer.php'); ?>