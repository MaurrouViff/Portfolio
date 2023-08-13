<?php

include "getRacine.php";
include "$racine/controler/controleurPrincipal.php";
include_once "$racine/modele/authentification.inc.php"; // pour pouvoir utiliser isLoggedOn()

$controller = new Controller();

if (isset($_GET["action"])) {
    $action = $_GET["action"];
} else {
    $action = "defaut";
}

$fichier = $controller->execute($action);
include "$racine/controler/$fichier";