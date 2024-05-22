<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// $baseDir = '/beginner_php';
// $uri = str_replace($baseDir, '', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
// $uri = '/' . trim($uri, '/');

// Debugging output to check the value of $uri
// var_dump($uri);

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/service' => 'controllers/service.php',
    '/contact' => 'controllers/contact.php',
    '/register' => 'controllers/register.php'
];

// Debugging output to check the routes array
// var_dump($routes);

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require($routes[$uri]);
    } else {
        require('view/404.php');
    }
}

routeToController($uri, $routes);
