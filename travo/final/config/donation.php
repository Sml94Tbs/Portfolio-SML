<?php
extract($_POST);
require "fonction.php";
$bdd = connect();
$sql = "INSERT INTO donation VALUES ($id, '$date', $montant)";
$resultat=$bdd->exec($sql);
header("location:listAdg.php");
?>