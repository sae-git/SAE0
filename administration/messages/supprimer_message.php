<?php
require_once("../../ressources/includes/connexion-bdd.php");
// Vérif si l'utilisateur est connecté
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Redirection vers la page de connexion
    $redirect_url = "http://" . $_SERVER['HTTP_HOST'] . '/code/administration/connexion/connexion.php';
    header("Location: $redirect_url");
    exit;
}

$URL_msg = "code/administration/messages/";

if (isset($_GET['id'])) {
    $id_message_a_supprimer = $_GET['id'];

    // Requête 
    $requete_suppression = "DELETE FROM message WHERE id = $id_message_a_supprimer";

    // Exécution 
    $resultat_suppression = mysqli_query($mysqli_link, $requete_suppression);

    if ($resultat_suppression) {
        echo "<script>alert('Le message a été supprimé avec succès.');</script>";
    } else {
        echo "<script>alert('Une erreur est survenue lors de la suppression du message.');</script>";
    }
}

// Redirecting to the messages list
echo "<script>window.location.href = '/$URL_msg';</script>";
exit;
?>
