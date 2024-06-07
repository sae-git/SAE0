<?php
require_once('../../ressources/includes/connexion-bdd.php');

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Redirection vers la page de connexion
    $redirect_url = "http://{$_SERVER['HTTP_HOST']}/code/administration/connexion/connexion.php";
    header("Location: $redirect_url");
    exit;
}

$page_courante = "articles";

$formulaire_soumis = !empty($_POST);

if ($formulaire_soumis) {
    $auteur_id = htmlentities($_POST["auteur"]);
    $titre = htmlentities($_POST["titre"]);
    $chapo = htmlentities($_POST["chapo"]);
    $contenu = htmlentities($_POST["contenu"]);
    $lien_image = htmlentities($_POST["lien_image"]);
    $lien_yt =htmlentities($_POST["lien_yt"]);

    // On prépare notre requête pour créer une nouvelle entité
    $requete_brute = "INSERT INTO article (auteur_id, titre, chapo, contenu, lien_image, lien_yt) VALUES ('$auteur_id', '$titre', '$chapo', '$contenu', '$lien_image', '$lien_yt')";
    
    // On crée une nouvelle entrée
    $resultat_brut = mysqli_query($mysqli_link, $requete_brute);    

    if ($resultat_brut) {
        echo "L'article a été créé avec succès.";
        // Tout s'est bien passé
    } else {
        echo "Une erreur est survenue lors de la création de l'article.";
        // Il y a eu un problème
    }
    
        // L'utilisateur reste sur la même page
        $pageRedirection = $_SERVER['HTTP_REFERER'];
        header("Location: $pageRedirection");    
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include_once("../ressources/includes/head.php"); ?>
    <link rel="icon" href="ressources/images/favicon.ico" type="image/x-icon">
    <title>Creation articles - Administration</title>
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
                            <label for="contenu" class="block text-lg font-medium text-gray-700">Contenu</label>
                            <textarea type="text" name="contenu" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" id="contenu"></textarea>
                        </div>
                        <div class="col-span-12">
                             <label for="lien_image" class="block text-lg font-medium text-gray-700">Lien de l'image</label>
                             <input type="text" name="lien_image" id="lien_image" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        </div>
                        <div class="col-span-12">
                             <label for="lien_yt" class="block text-lg font-medium text-gray-700">Lien Youtube</label>
                             <input type="text" name="lien_yt" id="lien_yt" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        </div>
                        <div class="col-span-12">
                            <label for="auteur" class="block text-lg font-medium text-gray-700">Auteur</label>
                            <select name="auteur" id="auteur" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                <?php
                                $requete = "SELECT id, nom, prenom FROM auteur";
                                $requete_auteur = mysqli_query($mysqli_link, $requete);
                                ?>

                                <?php
                                if ($requete_auteur) {
                                    if (mysqli_num_rows($requete_auteur) > 0) {

                                        while ($row = mysqli_fetch_assoc($requete_auteur)) {
                                            $selected = $row["id"] == $auteur_id ? 'selected' : '';
                                            echo "<option value='" . htmlspecialchars_decode($row["id"]) . "' $selected>" . htmlspecialchars_decode($row["nom"] . " " . $row["prenom"]) . "</option>";
                                        }
                                    } else {
                                        echo "<option value=''>Aucune donnée disponible</option>";
                                    }
                                } else {
                                    echo "<option value=''>Erreur lors de l'exécution de la requête</option>";
                                }
                                ?>
                            </select>
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