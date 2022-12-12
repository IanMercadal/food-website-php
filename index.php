<?php
// ROUTER
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => './controllers/index.php',
    '/dishes' => './controllers/dishes.php',
    '/about' => './controllers/about.php',
    '/menu' => './controllers/menu.php',
    '/review' => './controllers/review.php',
    '/wishlist' => './controllers/wishlist.php',
    '/login' => './controllers/login.php',
    '/register' => './controllers/register.php',
    '/user' => './controllers/user.php',
];

function abort($code = 404) {
    http_response_code($code);
    require "views/{$code}.php";
    die();
}

function routeToController($uri,$routes) {
    if(array_key_exists($uri,$routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}
routeToController($uri,$routes);
?>