<?php
 
print_r($_SERVER["REQUEST_URI"]);

if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
    return false;
} else {
    
    session_start();

    define('DEFAULT_CONTROLLER', 'home');
    define('DEFAULT_METHOD', 'index');

    require '../vendor/autoload.php';
    // require '../App/Functions/helpers.php';
    require '../App/Functions/Functions_twig.php';
    require 'bootstrap/bootstrap.php';
}