<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="images/logo1.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECEFRAM !</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>
    <section class="list-dona">
        <div class="dona-content">
            <h1>Voici la liste des donation.</h1>
            <?php
            require("fonction.php");
            $bdd = connect();
            $sql = "SELECT * FROM donation JOIN adherents ON donation.idDonateur = adherents.id ORDER BY nom";
            $resultat = $bdd->query($sql);

            ?>
            <table class="listAdh">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Date</th>
                        <th>Montant</th>
                    </tr>
                </thead>
                <?php
                $total = 0;
                while ($donation = $resultat -> fetch(PDO::FETCH_OBJ)){
                ?>
                <tbody>
                    <tr>
                        <th><?= $donation->nom?></th>
                        <td><?= $donation->prenom?></td>
                        <td><?= $donation->idDate?></td>
                        <td><?= $donation->montant?></td>
                        <td><a href=""></a></td>
                    </tr>
                </tbody>
                <?php
                };
                ?>
            </table>
        </div>
    </section>
</body>

</html>