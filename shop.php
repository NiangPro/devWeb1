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
        require_once("classes/Produit.php");

        $tab = [
            new Produit("Pomme", 1200, 3),
            new Produit("Banane", 800, 3),
            new Produit("Orange", 1200, 4),
            new Produit("Poire", 1500, 9),
            new Produit("Ananas", 1500, 3),
        ];
    
    
    ?>
    <div class="container mt-3 bg-info">
        <h1 class="text-center text-warning p-3">Liste des produits</h1>
    </div>

    <div class="container">
        <div class="row">
            <?php foreach($tab as $prod){ ?>
                <div class="col-md-3 ml-3 mb-3 card">
                    <div class="card-header <?= $prod->getQuantite() <= 3 ? 'bg-warning' : 'bg-success'  ?> text-center">
                        <?= $prod->getNom() ?>
                    </div>
                    <div class="card-body">
                        Prix : <?= $prod->getPu() ?> fcfa <br>
                        Quantite : <?= $prod->getQuantite() ?>kg
                    </div>
                </div>
            <?php } ?>
        </div>

        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        JE suis un modal
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    </div>

    <script src="assets/jquery.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>
</body>
</html>