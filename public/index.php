<?php

define("ROOT","C:/Users/HP/OneDrive/Bureau/Projet Semestre II/Projet Php");
define('WEBROOT', 'http://localhost:8900');

require_once ROOT."/vendor/autoload.php";

use App\Controllers\ {
   DetteController,
//    ArticleController,
//    CategorieController,
//    DepotController,
};

if (isset($_REQUEST['controller'])) {
    $controller = $_REQUEST['controller'];
    if ($controller == 'dette') {
        $controller = new DetteController();
        // $controller->index();
    }
    elseif ($controller == 'detail') {
        $controller = new DetteController();
        // $controller->index();
    }
    // elseif ($controller == 'securite') {
    //     $controller = new SecuriteController();
    //     $controller->index();
    // }
    // elseif ($controller == 'ressource') {
    //     $controller = new RessourceController();
    //     $controller->index();
    // }
}
else {
    $controller = new DetteController();
    // $controller->index();
}