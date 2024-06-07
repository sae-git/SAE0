<?php
require_once('../../ressources/includes/connexion-bdd.php');

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Redirection vers la page de connexion
    $redirect_url = "http://{$_SERVER['HTTP_HOST']}/code/administration/connexion/connexion.php";
    header("Location: $redirect_url");
    exit;
}

$requete_brute = '
    SELECT
        ar.id,
        ar.titre AS titre_article, 
        ar.chapo AS chapo_article,
        ar.contenu AS contenu_article,
        ar.lien_image AS image_article,
        ar.lien_yt AS lien_yt_article,
        ar.date_creation AS date_creation_article,
        ar.auteur_id AS article_auteur_id, 
        CONCAT(auteur.nom, " ", auteur.prenom) AS auteur
    FROM article AS ar 
    LEFT JOIN auteur 
    ON ar.auteur_id = auteur.id;
';
$resultat_brut = mysqli_query($mysqli_link, $requete_brute);

$requete_liste = "SELECT * FROM article";
$resultat_liste = mysqli_query($mysqli_link, $requete_brute);

$page_courante = "articles";
$racine_URL = $_SERVER['REQUEST_URI'];

$URL_creation = "{$racine_URL}/creation.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require_once("../ressources/includes/head.php"); ?>
    <link rel="icon" href="ressources/images/favicon.ico" type="image/x-icon">
    <title>Liste articles - Administration</title>
</head>

<body>
    <?php require_once('../ressources/includes/menu-principal.php'); ?>
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl py-6 justify-between flex">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Liste Articles</h1>
                <p class="text-gray-500">Nombre d'articles : <?php echo mysqli_num_rows($resultat_liste); ?></p>
            </div>
            <a href="<?php echo $URL_creation ?>" class="self-start block rounded-md py-2 px-4 text-base font-medium text-white shadow-sm bg-slate-700 hover:bg-slate-900">Ajouter un nouvel article</a>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl py-6">
            <div class="py-6">
                <table class="w-full bg-white rounded-lg overflow-hidden border-collapse shadow">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="font-bold pl-8 py-5 text-left">Id</th>
                            <th class="font-bold pl-8 py-5 text-left">Titre</th>
                            <th class="font-bold pl-8 py-5 text-left">Chapô</th>
                            <th class="font-bold pl-8 py-5 text-left">Date de création</th>
                            <th class="font-bold pl-8 py-5 text-left">Auteur</th>
                            <th class="pl-8 py-5"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($element = mysqli_fetch_array($resultat_brut, MYSQLI_ASSOC)) {
                            $lien_edition = "{$racine_URL}/edition.php?id={$element["id"]}";

                            $date_creation = new DateTime($element["date_creation_article"]);
                            $auteur_article = $element["auteur"];
                            if (is_null($auteur_article)) {
                                $auteur_article = "/";
                            }
                        ?>
                            <tr class="odd:bg-neutral-50  border-b-2 border-b-gray-100 last:border-b-0 first:border-t-2 first:border-t-gray-200">
                                <td class="pl-8 p-4 font-bold">
                                    <?php echo $element["id"]; ?>
                                </td>
                                <td class="pl-8 p-4"><?php echo $element["titre_article"]; ?></td>
                                <td class="pl-8 p-4"><?php echo $element["chapo_article"]; ?></td>
                                <td class="pl-8 p-4"><?php echo $date_creation->format('d/m/Y H:i:s'); ?></td>
                                <td class="pl-8 p-4">
                                    <?php echo $auteur_article; ?>
                                </td>
                                <td class="pl-8 p-4">
                                    <a href='<?php echo $lien_edition; ?>' class='font-bold text-blue-600'>Éditer</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <?php 
        require_once("../ressources/includes/global-footer.php");
    ?>
</body>

</html>