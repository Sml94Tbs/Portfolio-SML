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
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/admin.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <section class="add-donateur">
        <div class="donateur-content">
            <form action="#" method="POST" enctype="multipart/form-data">
                <h1>Ajouter un donateur</h1>
                <div class="add-box">
                    <input type="text" name="nom" required />
                    <label>Nom</label>
                </div>
                <div class="add-box">
                    <input type="text" name="prenom" required />
                    <label>Prénom</label>
                </div>
                <div class="add-box">
                    <input type="text" name="tel" required />
                    <label>Téléphone</label>
                </div>
                <div class="add-box">
                    <input type="email" name="email" required />
                    <label>Email</label>
                </div>
                <div class="adh">
                    <label><input type="checkbox">Adhérent</label>
                </div>
                <div class="btn-submit">
                    <button class="btn-adh" type="submit">OK</button>
                    <a href="admin.php" class="btn-adh">Retour à l'acceuil</a>
                </div>
            </form>
        </div>
    </section>
</body>

</html>