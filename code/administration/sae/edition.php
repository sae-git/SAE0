<?php
require_once('../../ressources/includes/connexion-bdd.php');

session_start();

// Vérif si l'utilisateur est connecté
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Redirection vers la page de connexion
    $redirect_url = "http://" . $_SERVER['HTTP_HOST'] . '/code/administration/connexion/connexion.php';
    header("Location: $redirect_url");
    exit;
}

$page_courante = "sae";

$formulaire_soumis = !empty($_POST);
$entree_mise_a_jour = array_key_exists("id", $_GET);

$URL_sae = "code/administration/sae/";

$entite = null;
if ($entree_mise_a_jour) {
    $id = $_GET["id"];
    // On cherche la SAE à éditer
    $requete_brute = "SELECT * FROM sae WHERE id = $id";
    $resultat_brut = mysqli_query($mysqli_link, $requete_brute);

    $entite = mysqli_fetch_array($resultat_brut, MYSQLI_ASSOC);
}

// Handling form submission
if ($formulaire_soumis) {
    $id = $_POST["id"];
    $titre = htmlentities($_POST["titre"]);
    $chapo = htmlentities($_POST["chapo"]);
    $lien_image = htmlentities($_POST["lien_image"]);

    // Update SAE
    $requete_maj = "
        UPDATE sae
        SET 
            titre = '$titre',
            chapo = '$chapo',
            lien_image = '$lien_image'
        WHERE id = '$id'
    ";

    $resultat_brut = mysqli_query($mysqli_link, $requete_maj);

    $final_url = "http://" . $_SERVER['HTTP_HOST'] . '/' . $URL_sae;
    header("Location: $final_url");
    exit;

    if ($resultat_brut) {
        echo "La SAE a été modifié avec succès.";
    } else {
        echo "Une erreur est survenue lors de la modification de la SAE.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include_once("../ressources/includes/head.php"); ?>
    <link rel="icon" href="ressources/images/favicon.ico" type="image/x-icon">
    <title>Editer SAE - Administration</title>
    <script>
        function confirmerSuppression(id) {
            if (confirm("Êtes-vous sûr de vouloir supprimer cette SAE ?")) {
                window.location.href = "/code/administration/sae/delete.php?id=" + id;
            }
        }
    </script>
</head>

<body>
<?php include_once '../ressources/includes/menu-principal.php'; ?>
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">Editer</h1>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <div class="py-6">
                <form method="POST" action="" class="rounded-lg bg-white p-4 shadow border-gray-300 border-1">
                    <section class="grid gap-6">
                        <input type="hidden" name="id" value="<?php echo $entite['id']; ?>">
                        <div class="col-span-12">
                            <label for="titre" class="block text-lg font-medium text-gray-700">Titre</label>
                            <input type="text" name="titre" value="<?php echo $entite['titre']; ?>" id="titre" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        </div>
                        <div class="col-span-12">
                            <label for="chapo" class="block text-lg font-medium text-gray-700">Chapô</label>
                            <textarea name="chapo" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" id="chapo"><?php echo $entite['chapo']; ?></textarea>
                        </div>
                        <div class="col-span-12">
                            <label for="lien_image" class="block text-lg font-medium text-gray-700">Lien de l'image</label>
                            <textarea name="lien_image" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" id="lien_image"><?php echo $entite['lien_image']; ?></textarea>
                        </div>
                        <div class="mb-3 col-md-6">
                            <button type="submit" name="editer" class="rounded-md bg-indigo-600 py-2 px-4 text-lg font-medium text-white shadow-sm hover:bg-indigo-700">Editer</button>
                        </div>
                        <div class="mb-3 col-md-6">
                            <button type="button" onclick="confirmerSuppression(<?php echo $entite['id']; ?>)" class="rounded-md bg-red-600 py-2 px-4 text-lg font-medium text-white shadow-sm hover:bg-red-700">Supprimer</button>
                        </div>
                    </section>
                </form>
            </div>
        </div>
    </main>
    <?php require_once("../ressources/includes/global-footer.php"); ?>
</body>
</html>
