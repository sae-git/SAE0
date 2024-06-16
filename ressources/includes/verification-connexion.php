<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // L'utilisateur n'est pas connecté
    $redirect_url = "http://" . $_SERVER['HTTP_HOST'] . '/chemin/vers/la/page/de/connexion.php';
    header("Location: $redirect_url");
    exit;
}
?>
