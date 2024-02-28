<?php
// Remove query string from the request URI
// Example : 
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => '/controllers/home.php',
    '/games' => '/controllers/games.php',
    '/game/add' => '/controllers/add_game.php',
];

if(array_key_exists($uri, $routes)){
    require ROOT . $routes[$uri];
} else {
    http_response_code(404);
    require ROOT . '/views/errors/404.php';
}
