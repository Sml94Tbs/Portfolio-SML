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
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <?php
    require("config/fonction.php");
    $bdd = connect();
    $sql = "SELECT * FROM adherents";
    $resultat = $bdd->query($sql);
    ?>
    <section class="listAdh">
        <div class="adh-content">
            <h1>Voici la iste des donateurs</h1>
            <div class="adh-table">
                <table>
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Téléphone</th>
                            <th>Mail</th>
                            <th>Adhésion</th>
                        </tr>

                    </thead>
                    <?php
                    while ($adherent = $resultat->fetch(PDO::FETCH_OBJ)){
                    ?>
                    <tbody>
                        <tr>
                            <th><?= $adherent->nom?></th>
                            <td><?= $adherent->prenom?></td>
                            <td><?= $adherent->tel?></td>
                            <td><?= $adherent->adherent?></td>
                            <td><a href="add-donateur.php?id=<?= $adherent->id?>">Ajouter une donation</a></td>
                            <td><a href=" modif-donateur.php?id=<?= $adherent->id?>">Modifier</a></td>
                            <td><a href=" add-donateur.php?id=<?= $adherent->id?>">Supprimer</a></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>

</html>