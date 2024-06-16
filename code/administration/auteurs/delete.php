<?php
require_once '../../ressources/includes/connexion-bdd.php';

session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Redirection vers la page de connexion
    $redirect_url = "http://{$_SERVER['HTTP_HOST']}/code/administration/connexion/connexion.php";
    header("Location: $redirect_url");
    exit;
}

$URL_auteurs = "code/administration/auteurs/";

if (isset($_GET['id'])) {
    $id_auteur_a_supprimer = $_GET['id'];

    // Supprimer les articles liés à cet auteur
    $requete_suppression_articles = "DELETE FROM article WHERE auteur_id = $id_auteur_a_supprimer";
    mysqli_query($mysqli_link, $requete_suppression_articles);

    // Supprimer l'auteur
    $requete_suppression_auteur = "DELETE FROM auteur WHERE id = $id_auteur_a_supprimer";
    $resultat_suppression = mysqli_query($mysqli_link, $requete_suppression_auteur);

    if ($resultat_suppression) {
        echo "<script>alert('L\'auteur a été supprimé avec succès.');</script>";
    } else {
        echo "<script>alert('Une erreur est survenue lors de la suppression de l\'auteur.');</script>";
    }
}

// Redirecting to the authors list
echo "<script>window.location.href = '/$URL_auteurs';</script>";
exit;
?>
