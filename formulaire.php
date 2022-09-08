<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
</head>
<body>
    
<?php 

    if (isset($_POST["envoyer"])) {
        extract($_POST);

            echo "<pre>";
            var_dump($_POST);
            
            echo "Bonjour ".$prenom." nom: $nom, email: $email";

            echo "LES LANGUES";
            foreach ($langue as $value) {
                echo $value;
            }
            echo "</pre>";
    }
    
    ?>
    <div class="contaner col-md-5">
        <h1>Formulaire d'inscription</h1>
        <form id="form" action="" method="POST">
            <div class="form-group">
                <label for="">Prenom</label>
                <input type="text" name="prenom" id="prenom" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Nom:</label>
                <input type="text" name="nom" id="nom" class="form-control" required>
            </div>
            <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
                <div class="input-group-text">Email</div>
                </div>
                <input type="email" name="email" id="email" class="form-control" required id="inlineFormInputGroupUsername2" placeholder="Adresse email">
            </div>
            <label for="">Langues</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox"  class="langue[]" name="langue" value="English" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    English
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="langue[]"  class="langue" value="Italian" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Italian
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="langue[]"  class="langue" value="french" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    French
                </label>
            </div>

            <button type="submit" name="envoyer" class="btn btn-success">Envoyer</button>
            <button type="reset" class="btn btn-danger">Annuler</button>
        </form>
    </div>
    


    <script src="assets/jquery.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>

    <script>
        let form = document.getElementById("form");
        let prenom = document.getElementById("prenom");
        let nom = document.getElementById("nom");
        let email = document.getElementById("email");
        let langues = document.getElementsByName("langue[]");
    

        form.addEventListener("submit", function(e){
            let tabLangues = [];
           for (let i = 0; i < langues.length; i++) {
            if(langues[i].checked){
                tabLangues.push(langues[i].value);
            }
           }
           document.write(`
           Prenom : ${prenom.value} <br>
           Nom : ${nom.value} <br>
           Email : ${email.value} <br>
           Les langues <br>
           `);
           tabLangues.forEach(l => document.write(l));
           
           
           e.preventDefault();
        })

    </script>
</body>
</html>