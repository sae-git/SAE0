<?php
require_once('../../ressources/includes/connexion-bdd.php');
// Vérif si l'utilisateur est connecté
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Redirection vers la page de connexion
    $redirect_url = "http://" . $_SERVER['HTTP_HOST'] . '/code/administration/connexion/connexion.php';
    header("Location: $redirect_url");
    exit;
}

$requete_brute = '
    SELECT
        sa.id,
        sa.titre AS titre_sae,
        sa.chapo AS chapo_sae,
        sa.lien_image AS image_article
    FROM sae AS sa
';

$resultat_brut = mysqli_query($mysqli_link, $requete_brute);

$requete_liste = "SELECT * FROM sae";
$resultat_liste = mysqli_query($mysqli_link, $requete_brute);

$page_courante = "sae";
$racine_URL = $_SERVER['REQUEST_URI'];

$URL_creation = "{$racine_URL}/creation.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require_once("../ressources/includes/head.php"); ?>
    <link rel="icon" href="ressources/images/favicon.ico" type="image/x-icon">
    <title>Liste SAE - Administration</title>
</head>

<body>
    <?php require_once('../ressources/includes/menu-principal.php'); ?>
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl py-6 justify-between flex">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Liste SAE</h1>
                <p class="text-gray-500">Nombre de SAE : <?php echo mysqli_num_rows($resultat_liste); ?></p>
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
                            <th class="pl-8 py-5"></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        while ($element = mysqli_fetch_array($resultat_brut, MYSQLI_ASSOC)) {
                            $lien_edition = "{$racine_URL}/edition.php?id={$element["id"]}";

                            ?>
                            <tr class="odd:bg-neutral-50  border-b-2 border-b-gray-100 last:border-b-0 first:border-t-2 first:border-t-gray-200">
                                <td class="pl-8 p-4 font-bold">
                                    <?php echo $element["id"]; ?>
                                </td>
                                <td class="pl-8 p-4"><?php echo $element["titre_sae"]; ?></td>
                                <td class="pl-8 p-4"><?php echo $element["chapo_sae"]; ?></td>
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