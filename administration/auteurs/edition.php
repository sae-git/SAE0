<?php
require_once '../../ressources/includes/connexion-bdd.php';

session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Redirection vers la page de connexion
    $redirect_url = "http://{$_SERVER['HTTP_HOST']}/code/administration/connexion/connexion.php";
    header("Location: $redirect_url");
    exit;
}

$page_courante = 'auteurs';

$formulaire_soumis = !empty($_POST);
$entree_mise_a_jour = array_key_exists('id', $_GET);

$entite = null;
if ($entree_mise_a_jour) {
    $id = $_GET["id"];

    $requete_brute = "SELECT * FROM auteur WHERE id = $id";
    $resultat_brut = mysqli_query($mysqli_link, $requete_brute);
    
    $entite = mysqli_fetch_array($resultat_brut, MYSQLI_ASSOC);
}

if ($formulaire_soumis) {
    $id = $_POST["id"];
    $nom = htmlentities($_POST["nom"]);
    $prenom = htmlentities($_POST["prenom"]);
    $lien_avatar = htmlentities($_POST["lien_avatar"]);
    $lien_twitter = htmlentities($_POST["lien_twitter"]);

    $requete_mise_a_jour = "
        UPDATE auteur
        SET 
            nom = '$nom',
            prenom = '$prenom',
            lien_avatar = '$lien_avatar',
            lien_twitter = '$lien_twitter'
        WHERE id = '$id'
    ";

    if ($resultat_mise_a_jour) {
        echo "L'auteur a été modifié avec succès.";
    } else {
        echo "Une erreur est survenue lors de la modification de l'auteur.";
    }
    
    $resultat_mise_a_jour = mysqli_query($mysqli_link, $requete_mise_a_jour);

    $pageRedirection = $_SERVER['HTTP_REFERER'];
    header("Location: $pageRedirection");
    exit;

}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include_once '../ressources/includes/head.php'; ?>
    <link rel="icon" href="ressources/images/favicon.ico" type="image/x-icon">
    <title>Éditeur auteur - Administration</title>
    <script>
        function confirmerSuppression(id) {
            if (confirm("Êtes-vous sûr de vouloir supprimer cet auteur ? Tous les articles associés seront également supprimés.")) {
                window.location.href = "/code/administration/auteurs/delete.php?id=" + id;
            }
        }
    </script>
</head>

<body>
    <?php include_once '../ressources/includes/menu-principal.php'; ?>
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl py-6 px-4">
            <h1 class="text-3xl font-bold text-gray-900">Éditer</h1>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl py-6">
            <div class="py-6">
                <?php if ($entite) { ?>
                    <form method="POST" action="" class="rounded-lg bg-white p-4 shadow border-gray-300 border-1">
                        <section class="grid gap-6">
                            <input type="hidden" name="id" value="<?php echo $entite['id']; ?>">
                            <div class="col-span-12">
                                <label for="nom" class="block text-lg font-medium text-gray-700">Nom</label>
                                <input type="text" value="<?php echo $entite['nom']; ?>" name="nom" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" id="nom">
                            </div>
                            <div class="col-span-12">
                                <label for="prenom" class="block text-lg font-medium text-gray-700">Prénom</label>
                                <input type="text" value="<?php echo $entite['prenom']; ?>" name="prenom" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" id="prenom">
                            </div>
                            <div class="col-span-12">
                                <label for="avatar" class="block text-lg font-medium text-gray-700">Lien avatar</label>
                                <input type="url" value="<?php echo $entite['lien_avatar']; ?>" name="lien_avatar" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" id="avatar">
                                <div class="text-sm text-gray-500">
                                    Mettre l'URL de l'avatar (chemin absolu)
                                </div>
                            </div>
                            <div class="col-span-12">
                                <label for="lien_twitter" class="block text-lg font-medium text-gray-700">Lien twitter</label>
                                <input type="text" value="<?php echo $entite['lien_twitter']; ?>" name="lien_twitter" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" id="lien_twitter">
                            </div>
                            <div class="mb-3 col-md-6">
                                <button type="submit" name="editer" class="rounded-md bg-indigo-600 py-2 px-4 text-lg font-medium text-white shadow-sm hover:bg-indigo-700">Éditer</button>
                            </div>
                            <div class="mb-3 col-md-6">
                                <button type="button" onclick="confirmerSuppression(<?php echo $entite['id']; ?>)" class="rounded-md bg-red-600 py-2 px-4 text-lg font-medium text-white shadow-sm hover:bg-red-700">Supprimer</button>
                            </div>
                        </section>
                    </form>
                <?php } else { ?>
                    <!-- A compléter -->
                <?php } ?>
            </div>
        </div>
    </main>
    <?php require_once("../ressources/includes/global-footer.php"); ?>
</body>
</html>
