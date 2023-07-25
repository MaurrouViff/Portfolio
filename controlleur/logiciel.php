<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
// Gère l'affichage de la page logiciel
$titre = "Accueil - Portfolio";
include "$racine/vueLogiciel.php";

