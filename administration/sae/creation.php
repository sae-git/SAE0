<?php
require_once('../../ressources/includes/connexion-bdd.php');

// Vérif si l'utilisateur est connecté
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Redirection vers la page de connexion
    $redirect_url = "http://" . $_SERVER['HTTP_HOST'] . '/code/administration/connexion/connexion.php';
    header("Location: $redirect_url");
    exit;
}

$page_courante = "sae";

$formulaire_soumis = !empty($_POST);

if ($formulaire_soumis) {
    $titre = htmlentities($_POST["titre"]);
    $chapo = htmlentities($_POST["chapo"]);
    $lien_image = htmlentities($_POST["lien_image"]);

    // On prépare notre requête pour créer une nouvelle entité
    $requete_brute = "INSERT INTO sae (titre, chapo, lien_image) VALUES ('$titre', '$chapo', '$lien_image')";
    
    // On crée une nouvelle entrée
    $resultat_brut = mysqli_query($mysqli_link, $requete_brute);

    // L'utilisateur reste sur la même page
    $pageRedirection = $_SERVER['HTTP_REFERER'];
    header("Location: $pageRedirection");        

    if ($resultat_brut) {
        echo "La SAE a été créé avec succès.";
        // Tout s'est bien passé
    } else {
        echo "Une erreur est survenue lors de la création de la SAE.";
        // Il y a eu un problème
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include_once("../ressources/includes/head.php"); ?>
    <link rel="icon" href="ressources/images/favicon.ico" type="image/x-icon">
    <title>Creation SAE - Administration</title>
</head>

<body>
    <?php include_once '../ressources/includes/menu-principal.php'; ?>
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">Créer</h1>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <div class="py-6">
                <form method="POST" action="" class="rounded-lg bg-white p-4 shadow border-gray-300 border-1">
                    <section class="grid gap-6">
                        <div class="col-span-12">
                            <label for="titre" class="block text-lg font-medium text-gray-700">Titre</label>
                            <input type="text" name="titre" id="titre" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        </div>
                        <div class="col-span-12">
                            <label for="chapo" class="block text-lg font-medium text-gray-700">Chapô</label>
                            <textarea type="text" name="chapo" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" id="chapo"></textarea>
                        </div>
                        <div class="col-span-12">
                             <label for="lien_image" class="block text-lg font-medium text-gray-700">Lien de l'image</label>
                             <input type="text" name="lien_image" id="lien_image" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        </div>
                        <div class="mb-3 col-md-6">
                            <button type="submit" name="créer" class="rounded-md bg-indigo-600 py-2 px-4 text-lg font-medium text-white shadow-sm hover:bg-indigo-700">Créer</button>
                        </div>
                    </section>
                </form>
            </div>
        </div>
    </main>
    <?php require_once("../ressources/includes/global-footer.php"); ?>
</body>

</html>