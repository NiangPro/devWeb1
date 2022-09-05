<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les tableaux</title>
</head>
<body>
    <?php

        require_once('fonctions.php');

        echo "<h1>Les tableaux en PHP</h1>";

        //DECLARATION
        $tab = ["fatou", "bouba", "gora", "lika"];
        $entiers = [45, 12];

        afficherTableau($tab);

        echo "<br> Apres affichage";
        $entiers[] = 120;

        array_push($entiers, 25);

        sort($entiers); // trie croissant
        rsort($entiers);// trie decroissant
        krsort($entiers);// trie des cles par ordre decroissant

        // tableau associatif
        $perso = [
            "prenom" => "Bassirou",
            "nom" => "Niang",
            "age" => 23
        ];

        echo "<br> la taille du tableau est de ".count($entiers)."<br>"; // count permet de donner la taille du tableau
        
        $perso["sexe"] = "Homme"; // insertion
        $valeurs = array_values($perso); // recuperer les valeurs d'un tableau
        $cles = array_keys($perso);// recuperer les cles d'un tableau

        //echo $perso["prenom"];

        //$firstItem = array_shift($perso); supprimer le 1er element
        //$lastItem = array_pop($perso); supprimer le dernier element

        //affichage
        foreach($entiers as $indice => $el){
            $indice = ucfirst($indice);
            echo "$indice : $el<br>";
        }

        // echo "<br> $firstItem";
    
    ?>

    <script>
        //declaration
        let tab = [52, 2, 23, -5];

        tab.push("valeur");
        document.write("<h1>Les tableaux en JAVASCRIPT</h1>");
        tab.forEach(function(el, key){
            document.write(key + " => "+el + " ")
        });

        let lastitem = tab.pop();
        let firstItem = tab.shift();
        document.write(firstItem);
    </script>
</body>
</html>

