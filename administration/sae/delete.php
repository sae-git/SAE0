<?php
require_once('../../ressources/includes/connexion-bdd.php');

// Vérif si l'utilisateur est connecté
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Redirection vers la page de connexion
    $redirect_url = "http://" . $_SERVER['HTTP_HOST'] . '/code/administration/connexion/connexion.php';
    header("Location: $redirect_url");
    exit;
}

$URL_article = "code/administration/sae/";

if (isset($_GET['id'])) {
    $id_sae_a_supprimer = $_GET['id'];

    $requete_suppression = "DELETE FROM sae WHERE id = $id_sae_a_supprimer";
    $resultat_suppression = mysqli_query($mysqli_link, $requete_suppression);

    if ($resultat_suppression) {
        echo "<script>alert('La SAE a été supprimé avec succès.');</script>";
    } else {
        echo "<script>alert('Une erreur est survenue lors de la suppression de la SAE.');</script>";
    }

    $final_url = "http://" . $_SERVER['HTTP_HOST'] . '/' . $URL_article;
    echo "<script>window.location.href = '$final_url';</script>";
    exit;
}
?>
