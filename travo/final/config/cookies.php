<?php
// session_start();
if ($_GET['choix'] == 1) {
    setcookie('user', 'sml', time() + 60);
    header('location:index.php');
} else{
    header('location:index.php');
}