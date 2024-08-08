<?php 

namespace App\Core;
class Router 
{
    // public static function run(){
    //     if (isset($_REQUEST["ressource"])) {
    //         $ressource = $_REQUEST["ressource"];
    //         if (isset($_REQUEST["controller"])) {
    //             $controllerClass = ucfirst($_REQUEST["controller"]) . "Controller";
    //             $fileController="../src/Controllers/$controllerClass.php";
    //             if (file_exists($fileController)) {
    //                 require_once $fileController;
    //                 $class = new $controllerClass();
    //             }else{
    //                 require_once "../src/Controllers/html/ErreurController.php";
    //                 $class = new ErreurController();
    //             }
    //         }   
    //     }
    //     else{
    //         require_once "../src/Controllers/html/LoginController.php";
    //         $class = new LoginController();
    //     }
    // }
}