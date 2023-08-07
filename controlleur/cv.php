<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
// Gère l'affichage de la page web du cv en ligne
$titre  = "CV en ligne - Portfolio";
include "$racine/vueCV.php";