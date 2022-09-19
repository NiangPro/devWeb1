<?php require_once('partials/_header.php'); ?>
<h1>Page clients</h1>
<form method="POST" action="clientController.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Prenom</label>
      <input type="text" class="form-control" name="prenom" placeholder="Prenom">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Nom</label>
      <input type="text" class="form-control" name="nom" placeholder="Nom">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Addresse</label>
    <input type="text" class="form-control" name="adresse" placeholder="Adresse">
  </div>
  <div class="form-group">
    <label for="inputAddress">Telephone</label>
    <input type="tel" class="form-control" name="tel" placeholder="Telephone">
  </div>

  <button type="submit" name="valider" class="btn btn-primary">Ajouter</button>
  <button type="reset" class="btn btn-warning">Annuler</button>
</form>

<?php require_once('partials/_footer.php'); ?>