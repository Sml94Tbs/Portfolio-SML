<?php
session_start();
extract($_POST);
require("config/fonction.php");
$bdd = connect();
$sql = "SELECT * FROM admin WHERE login = '$id' AND mdp=md5('$mdp')";
$resultat=$bdd -> query($sql);
$nb_lignes = $resultat -> rowCount();
if ($nb_lignes == 0){
    header('location:connexion.php');
}elseif ($nb_lignes == 1){
    $_SESSION['autorisation']="OK";
    header('location:admin.php');
}
?>