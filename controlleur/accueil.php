<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
// Gère l'affichage de l'accueil
$titre = "Accueil - Portfolio";
include "$racine/vueAccueil.php";

