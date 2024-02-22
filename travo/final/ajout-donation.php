<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="images/logo1.jpg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ECEFRAM !</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/admin.css" />
</head>

<body>
    <?php $id = $_GET["id"];?>
    <section class="ajout-donation">
        <div class="add-dn-content">
            <h1>Ajouter une donation</h1>
            <form action="config/donation.php" method="POST">
                <h4>Pour <input type="hidden" name="id" value="<?= $id?>" required /></h4>
                <div class="add-dn">
                    <label>Date</label>
                    <input type="date" name="date" required />
                </div>
                <div class="add-dn">
                    <label>Montant</label>
                    <input type="number" name="montant" placeholder="Saisir le montant" required />
                </div>
                <div class="btn-submit">
                    <button class="btn-adh" type="submit">Ajouter</button>
                    <a href="admin.php" class="btn-adh">Retour a l'acceuil</a>
                </div>
            </form>
        </div>
    </section>
</body>

</html>