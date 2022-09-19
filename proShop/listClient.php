<?php require_once('partials/_header.php'); ?>
    <h1>Liste des clients</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Telephone</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clients as $cli) {?>
                <tr>
                    <td><?= $cli->prenom?></td>
                    <td><?= $cli->nom?></td>
                    <td><?= $cli->adresse?></td>
                    <td><?= $cli->tel?></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
<?php require_once('partials/_footer.php'); ?>
