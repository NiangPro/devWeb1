<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once('classes/Produit.php');
        require_once('classes/Etudiant.php');
        

        $p = new Produit();
        $e = new Etudiant("Astou", "Fall", 56);
        $e2 = new Etudiant("Aliou", "Ndiaye", 34);
        $e3 = new Etudiant("Aliou", "Ndiaye", 34);
        $e5 = new Etudiant("Aliou", "Ndiaye", 34);
        $e4 = new Etudiant("Aliou", "Ndiaye", 34);

        $e->setPrenom("Bassirou");

        echo Etudiant::$nbre;

        $e2->affiche();
        $e->marcher();

        $p->setNom("POMME");

            echo $p->getNom();
    
    ?>

<script>
    let person = function(prenom, nom) {
        this.prenom = prenom;
        this.nom = nom;

        this.affiche = function (){
            document.write(`Les informations de la personne <br>
            Prenom: ${this.prenom} <br>
            Nom: ${this.nom} <br>
        `)
        }
    };

    let p1 = new person("Fatou");
    let p2 = new person("Ilam", "Ba");
    let p3 = new person("AICHA", "Ba");
    let p5 = new person("bOUBA", "Ba");
    let p4 = new person("gORA", "Ba");
    let p6 = new person("oURY", "Ba");

    let tabp = [p1, p2, p3, p4, p5, p6];

    function afficheTab(tab){
        tab.forEach((el, key) => {
            el.affiche();
        });
    }

    afficheTab(tabp);
    
</script>
</body>
</html>