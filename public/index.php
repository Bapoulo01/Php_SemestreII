<?php

define("ROOT","C:/Users/HP/OneDrive/Bureau/Projet Semestre II/Projet Php");
define('WEBROOT', 'http://localhost:8900');

require_once ROOT."/vendor/autoload.php";

use App\Controllers\ {
    DetteController,
    LoginController,
    PaiementController,
    DashboardController

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
    elseif ($controller == 'paiement') {
        $controller = new PaiementController();
        // $controller->index();
    }
    elseif ($controller == 'login') {
        // var_dump("ok");
        // die;
        $controller = new LoginController();
        // $controller->index();
    }
    elseif ($controller == 'dashboard') {
        $controller = new DashboardController();
        // $controller->index();
    }
}
else {

    $controller = new LoginController();
    // $controller = new DetteController();
    // $controller->index();
}