<?php 
require_once('partials/_header.php');
    extract($_GET);
?>

    <h1>Information de <?= $nom ?></h1>

    <div class="card col-md-3 mr-5 shadow-lg mb-2">
      <img src="<?= $image ?>" style="height:250px;"  class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?= $nom ?></h5>
        <p class="card-text">
          Prix : <?= $pu ?> F CFA <br>
          Quantite : <?= $qte ?> Kg <br>
        </p>
        <a href="produit.view.php" class="btn btn-success">Retour</a>
      </div>
    </div>

<?php require_once('partials/_footer.php'); ?>