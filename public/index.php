<?php
// Load config file.
require_once $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php';

// Autoload namespaced classes.
spl_autoload_register(function ($class) {
    $className = lcfirst(str_replace("\\", DIRECTORY_SEPARATOR, $class));
    include_once $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "$className.php";
});

// Create new Router instance and add routes.
$router = new App\Router();
$router->add('/', ['controller' => App\Controller::class, 'action' => 'index']);
$router->add('/users', ['controller' => App\Controller::class, 'action' => 'users']);
$router->add('/advertisements', ['controller' => App\Controller::class, 'action' => 'advertisements']);

// Dispatch route for the right controller method
$router->dispatch($_SERVER['REQUEST_URI']);
