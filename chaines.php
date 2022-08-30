<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les chaines de caracteres</title>
</head>
<body>
    <?php
        echo "<br><h1>LE CODE ---- PHP</h1>";

    $chaine = "ma chaine de caracteres";
    $chaine2 = "Ma chaine de caracteres";

    echo strlen($chaine); // strlen permet de determiner la taille d'une chaine de caracteres
    echo substr($chaine, 0, 10); // substr permet d'extraire une sous chaine
    echo $chaine[3];

    echo strtoupper($chaine);// strtoupper pour mettre en majuscule
    echo strtolower($chaine);// strtolower pour mettre en minuscule
    echo ucfirst($chaine);// ucfirst pour mettre en majuscule le premier letre
    echo ucwords($chaine);// ucwords pour mettre en majuscule le premier letre

    echo strrev($chaine);
    
    echo "<br>".strcmp(strtolower($chaine), strtolower($chaine2));

    for ($i=0; $i <strlen($chaine) ; $i++) { 
        # code...
    }
    ?>

    <script>
        let chaine = "Ma chaine en javascript";

        let schaine = chaine.substr(0, 10);

        document.write("<br><h1>LE CODE ---- JAVASCRIPT</h1>");
        document.write(schaine[0]);


    </script>
</body>
</html>