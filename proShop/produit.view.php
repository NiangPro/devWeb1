<?php require_once('partials/_header.php'); 
  require_once('classes/produit.php'); 

  $products = [
      new Produit("Ananas", 2000, 4, "images/ananas.png"),
      new Produit("Banane", 800, 5, "images/banane.png"),
      new Produit("Fraise", 1500, 3, "images/fraise.png"),
      new Produit("Kiwi", 1600, 5, "images/kiwi.png"),
      new Produit("Mangue", 500, 10, "images/mangue.png"),
      new Produit("Orange", 1200, 2, "images/orange.png"),
      new Produit("Papaye", 1000, 6, "images/papaye.png"),
      new Produit("Poire", 1500, 4, "images/poire.png"),
  ];

?>

  <h1 class="text-center">Liste des Produits</h1>
  <div class="row text-center d-flex">
    <?php foreach($products as $p): ?>
    <div class="card col-md-3 mr-5 shadow-lg mb-2">
      <img src="<?= $p->getImage() ?>" style="height:250px;"  class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?= $p->getNom() ?></h5>
        <p class="card-text">
          Prix : <?= $p->getPu() ?> F CFA <br>
          Quantite : <?= $p->getQte() ?> Kg <br>
        </p>
        <a href="info.php?nom=<?= $p->getNom() ?>&pu=<?= $p->getPu() ?>&qte=<?= $p->getQte() ?>&image=<?= $p->getImage() ?>" class="btn btn-info" title="Cliquez pour voir les infos de <?= $p->getNom() ?> ">Voir plus</a>
      </div>
    </div>
    <?php endforeach; ?>
  </div>

<?php require_once("partials/_footer.php"); ?>