<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les bases du Php</title>
</head>
<body>
    <?php  

        // les variables
        
        $prenom = "Bassirou";
        $nom = "Niang";
        $age = "34";
        define("PI_PHP", 3.14);

            echo "PHP <br>";
            echo "Bonjour tout le monde <br>";
            echo "Prenom : $prenom, Nom : $nom <br>";
            echo "Pi = ".PI_PHP;

            settype($age, "float"); //settype permet de modifier le type d'une variable
            echo "le type d'age ".gettype($age); // gettype permet de donner le type d'une variable

            unset($age); //unset permet de supprimer une variable
            if(isset($age)){ // isset pour tester l'existance d'une variable
                echo "variable existante";
            }else{
                echo "variable inexistante";
            }

            echo "<br>";
            for ($i=1; $i <= 10 ; $i++) { 
                echo "$i ";
            }
            echo "<br>";
    ?>

    <script>
        let prenom  = "lika";
        const PI = 3.14;
        document.write("<br> JAVASCRIPT <br>")
        for(let i = 1; i<=10;i++){
            document.write(i+" ");
        }
        document.write(`<br>Prenom : ${prenom}`);
    </script>
</body>
</html>