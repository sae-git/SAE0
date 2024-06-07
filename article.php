<?php
$couleur_bulle_classe = "rose";
$page_active = "index";

require_once('./ressources/includes/connexion-bdd.php');

$id = isset($_GET['id']) ? $_GET['id'] : 0;

if ($id > 0) {
    $requete_brute = "SELECT article.*, auteur.nom AS auteur_nom, auteur.prenom AS auteur_prenom
                      FROM article
                      LEFT JOIN auteur ON article.auteur_id = auteur.id
                      WHERE article.id = $id";
    $resultat_brut = mysqli_query($mysqli_link, $requete_brute);
    $entite = mysqli_fetch_array($resultat_brut, MYSQLI_ASSOC);

    if ($entite) {
        $titre = htmlspecialchars_decode($entite["titre"], ENT_QUOTES);
        $chapo = htmlspecialchars_decode($entite["chapo"], ENT_QUOTES);
        $contenu = htmlspecialchars_decode($entite["contenu"]);
        $image = isset($entite["lien_image"]) ? htmlspecialchars_decode($entite["lien_image"], ENT_QUOTES) : null;
        $date_creation = date("d/m/Y", strtotime($entite["date_creation"]));
        $auteur = !empty($entite["auteur_nom"]) ? htmlspecialchars_decode($entite["auteur_nom"] . ' ' . $entite["auteur_prenom"], ENT_QUOTES) : "Auteur inconnu";
        $video_youtube = isset($entite["video_youtube"]) ? htmlspecialchars_decode($entite["video_youtube"], ENT_QUOTES) : null;
    } else {
        echo "Article non trouvé.";
        exit;
    }
} else {
    echo "ID d'article invalide.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <base href="/<?php echo $_ENV['CHEMIN_BASE']; ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article - SAÉ 203</title>

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/header.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/accueil.css">
    <link rel="icon" href="ressources/images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <?php require_once('./ressources/includes/top-navigation.php'); ?>
    <?php require_once('./ressources/includes/bulle.php'); ?>

    <main class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4 text-center"><?php echo htmlspecialchars_decode($titre); ?></h1>
        <div class="flex flex-col items-center md:flex-row md:items-center md:justify-center mb-6">
            <?php if (!empty($image)) : ?>
                <img src="<?php echo htmlspecialchars_decode($image); ?>" alt="Image de l'article" class="md:w-1/3 mb-4 md:mb-0 md:mr-6 rounded">
            <?php endif; ?>
            <p class="text-lg text-center"><?php echo nl2br(htmlspecialchars_decode($chapo)); ?></p>
        </div>
        <div class="prose max-w-none mb-6 text-center"><?php echo nl2br(htmlspecialchars_decode($contenu)); ?></div>
        <div class="text-center">
            <p class="text-sm text-gray-600 mb-1">Publié le : <?php echo htmlspecialchars_decode($date_creation); ?></p>
            <p class="text-sm text-gray-600">Auteur : <?php echo htmlspecialchars_decode($auteur); ?></p>
        </div>
        <?php if (!empty($video_youtube)) : ?>
            <div class="mt-8">
                <iframe class="w-full h-64 md:h-96" src="https://www.youtube.com/embed/<?php echo htmlspecialchars($video_youtube); ?>" frameborder="0" allowfullscreen></iframe>
            </div>
        <?php endif; ?>
    </main>
</body>

<?php require_once('./ressources/includes/footer.php'); ?>

</html>
