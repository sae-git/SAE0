<?php
// Editez le tableau de dictionnaires ci-dessous
$liste_entrees_menu = [
    [
        "lien" => "http://{$_SERVER['HTTP_HOST']}/code/administration/articles",
        "nom" => "Articles",
        "clef" => "articles"
    ],
    [
        "lien" => "http://{$_SERVER['HTTP_HOST']}/code/administration/auteurs",
        "nom" => "Auteurs",
        "clef" => "auteurs"
    ],
    [
        "lien" => "http://{$_SERVER['HTTP_HOST']}/code/administration/messages",
        "nom" => "Messages",
        "clef" => "messages"
    ],
    [
        "lien" => "http://{$_SERVER['HTTP_HOST']}/code/administration/sae",
        "nom" => "SAE",
        "clef" => "sae"
    ],
    [
        "lien" => "http://{$_SERVER['HTTP_HOST']}/code/administration/connexion/deconnexion.php",
        "nom" => "Déconnexion",
        "clef" => "deconnexion"
    ]
];
?>


<nav class="bg-gradient-to-r from-gray-800 to-slate-900">
    <div class="mx-auto px-4 max-w-7xl">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <h1 class="text-white font-bold">Administration SAE 203</h1>
                </div>
                <div class="ml-10 flex items-baseline space-x-4">
                    <?php foreach ($liste_entrees_menu as $entree_menu) {
                        $liste_classes = 'text-white ';
                        $aria_current_attr = "";
                        if ($page_courante === $entree_menu["clef"]) {
                            $aria_current_attr = "aria-current='page'";
                            $liste_classes = "bg-white text-gray-900";
                        }

                        if ($entree_menu["clef"] === "deconnexion") {
                            echo "
                                <form action='{$entree_menu["lien"]}' method='post'>
                                    <button type='submit' class='bg-white text-gray-900 rounded-md font-medium hover:bg-gray-700 hover:text-white px-3 py-2'>
                                        {$entree_menu["nom"]}
                                    </button>
                                </form>
                            ";
                        } else {
                            echo "
                                <a href='{$entree_menu["lien"]}' class='{$liste_classes} rounded-md font-medium hover:bg-gray-700 hover:text-white px-3 py-2' $aria_current_attr>
                                    {$entree_menu["nom"]}
                                </a>
                            ";
                        }
                    } ?>
                </div>
            </div>
        </div>
    </div>
</nav>
