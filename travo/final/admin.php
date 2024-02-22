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
    <section class="admin">
        <div class="admin-content">
            <h1>Bienvenue dans l'espace administrateur !</h1>
            <div class="admin-compenent">
                <a href="listAdh.php" class="btn-admin">Voir la liste des donnateurs</a>
                <a href="listDona.php" class="btn-admin">Voir la liste des donnations</a>
                <a href="add-donateur.php" class="btn-admin">Ajouter un donnateur</a>
                <a href="index.php" class="btn-admin">Se déconnecter</a>
            </div>
        </div>
    </section>
</body>

</html>