<?php

require_once __DIR__ . '/../vendor/autoload.php';

$router = new App\Router();

$router->register('/',[App\Classes\Home::class,'index']);

// $router->register(
//     '/',
//     function() {
//         echo 'Home';
//     }
// );

// $router->register(
//     '/invoices',
//     function() {
//         echo 'Invoices';
//     }
// );

echo $router->resolve($_SERVER['REQUEST_URI']);