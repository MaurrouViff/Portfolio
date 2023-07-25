<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
// Gère l'affichage de la page web "à propos"
$titre  = "Langage - Portfolio";
include "$racine/vueLangage.php";
