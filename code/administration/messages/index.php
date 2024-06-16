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

$requete_brute = "SELECT * FROM message";
$resultat_brut = mysqli_query($mysqli_link, $requete_brute);

$page_courante = "messages";

$URL_msg = "code/administration/messages/";

$nombre_message = mysqli_num_rows($resultat_brut);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include_once("../ressources/includes/head.php"); ?>
    <title>Liste messages - Administration</title>
    <link rel="icon" href="ressources/images/favicon.ico" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script>
        function confirmerSuppression(id) {
            if (confirm("Êtes-vous sûr de vouloir supprimer ce message ?")) {
                window.location.href = "/code/administration/messages/supprimer_message.php?id=" + id;
            }
        }
    </script>
</head>

<body>
<?php include_once "../ressources/includes/menu-principal.php"; ?>
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl py-6">
            <h1 class="text-3xl font-bold text-gray-900">Liste messages reçus</h1>
            <p class="text-gray-500">Nombre de messages : <?php echo $nombre_message; ?></p>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl py-6">
            <div class="py-6">
                <table class="w-full bg-white rounded-lg overflow-hidden border-collapse shadow">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="font-bold pl-8 py-5 text-left">Id</th>
                            <th class="font-bold pl-8 py-5 text-left">Nom</th>
                            <th class="font-bold pl-8 py-5 text-left">Prénom</th>
                            <th class="font-bold pl-8 py-5 text-left">E-mail</th>
                            <th class="font-bold pl-8 py-5 text-left">Contenu</th>
                            <th class="font-bold pl-8 py-5 text-left">Type</th>
                            <th class="font-bold pl-8 py-5 text-left">Date de création</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($element = mysqli_fetch_array($resultat_brut, MYSQLI_ASSOC)) { ?>
                            <tr class="odd:bg-neutral-50 border-b-2 border-b-gray-100 last:border-b-0 first:border-t-2 first:border-t-gray-200">
                                <td class="pl-8 p-4 font-bold"><?php echo $element["id"]; ?></td>
                                <td class="pl-8 p-4"><?php echo $element["nom"]; ?></td>
                                <td class="pl-8 p-4"><?php echo $element["prenom"]; ?></td>
                                <td class="pl-8 p-4"><?php echo $element["email"]; ?></td>
                                <td class="pl-8 p-4"><?php echo $element["contenu"]; ?></td>
                                <td class="pl-8 p-4"><?php echo $element["type"]; ?></td>
                                <td class="pl-8 p-4"><?php echo $element["date_creation"]; ?>
                                <span name="supprimer" class="ml-2">
                                <a href="javascript:void(0);" onclick="confirmerSuppression(<?php echo $element['id']; ?>)"><i class="fas fa-trash-alt text-red-600"></i></a>
                                </span>
                                </td>
                            </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <?php require_once("../ressources/includes/global-footer.php"); ?>
</body>

</html>

