<?php
class Controller {

    private $actions;
    // Liste des actions qui redirigent vers les pages
    public function __construct() {
        $this->actions = array(
            "defaut" => "accueil.php",
            "accueil" => "accueil.php",
            "propos" => "propos.php",
            "langage" => "langage.php"
        );
    }
    // Exécutions des actions
    public function execute($action) {
        if (array_key_exists($action, $this->actions)) {
            return $this->actions[$action];
        } else {
            return $this->actions["defaut"];
        }
    }
}

// Exemple d'utilisation
$controller = new Controller();
$action = "accueil";
$page = $controller->execute($action);

