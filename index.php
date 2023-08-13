<?php

include "getRacine.php";
include "$racine/controlleur/Controller.php";


$controller = new Controller();

if (isset($_GET["action"])) {
    $action = $_GET["action"];
} else {
    $action = "defaut";
}

$fichier = $controller->execute($action);
include "$racine/controlleur/$fichier";