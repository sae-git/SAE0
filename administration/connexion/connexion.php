<?php
session_start();

require_once('../../ressources/includes/connexion-bdd.php');

$page_courante = "connexion";
$URL_administration = "/code/administration/auteurs/";

// Vérification du mot de passe soumis via le formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['password'] ?? '';
    $password_correct = "SAE203"; // Mot de passe correct

    if (!empty($password) && $password === $password_correct) {
        $_SESSION['logged_in'] = true;

        // Rediriger vers la page d'administration
        $final_url = "http://{$_SERVER['HTTP_HOST']}{$URL_administration}";
        header("Location: $final_url");
        exit;
    } else {
        $error_message = "Mot de passe incorrect.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require_once("../ressources/includes/head.php"); ?>
    <link rel="icon" href="/ressources/images/favicon.ico" type="image/x-icon">
    <title>Connexion - Administration</title>
</head>

<body>
    <?php require_once('../ressources/includes/menu-principal-connexion.php'); ?>
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl py-6 justify-between flex">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Connexion</h1>
            </div>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <div class="py-6">
                <form method="POST" action="/code/administration/connexion/connexion.php"
                    class="rounded-lg bg-white p-4 shadow border-gray-300 border-1">
                    <section class="grid gap-6">
                        <div class="col-span-12">
                            <label for="password"
                                class="block text-lg font-medium text-gray-700">Mot de passe</label>
                            <input type="password" name="password" id="password"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            <input type="submit" name="Soumettre"
                                class="rounded-md bg-indigo-600 py-2 px-4 text-lg font-medium text-white shadow-sm hover:bg-indigo-700"
                                value="Se connecter">
                        </div>
                    </section>
                </form>
                <?php
                if (isset($error_message)) {
                    echo '<p class="text-red-500 mt-4">' . $error_message . '</p>';
                }
                ?>
            </div>
        </div>
    </main>
    <?php require_once("../ressources/includes/global-footer.php"); ?>
</body>

</html>
