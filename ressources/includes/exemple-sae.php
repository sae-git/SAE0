<?php
require_once('./ressources/includes/connexion-bdd.php');

// Requête SQL pour récupérer les SAE
$requete_brute = "SELECT id, titre, chapo FROM sae";
$resultat_brut = mysqli_query($mysqli_link, $requete_brute);

if (!$resultat_brut) {
    die('Erreur de requête SQL : ' . mysqli_error($mysqli_link));
}

// Afficher chaque SAE
while ($sae = mysqli_fetch_assoc($resultat_brut)) {
    ?>
    <article class="projet">
        <figure class="img">
            <img src="ressources/images/image-article.png" alt="">
        </figure>
        <section class='textes'>
            <h2 class="titre"><?php echo htmlspecialchars_decode($sae['titre']); ?> </h2>
            <p class='paragraphe chapo'><?php echo nl2br(htmlspecialchars_decode($sae['chapo'])); ?></p>
        </section>
    </article>
    <?php
}

mysqli_free_result($resultat_brut);
?>
