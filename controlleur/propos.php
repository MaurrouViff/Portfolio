<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
// Gère l'affichage de la page web "à propos"
$titre  = "À propos - Portfolio";
include "$racine/vuePropos.php";