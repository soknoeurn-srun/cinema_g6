<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/home/index.controller.php',
    '/movie' => 'controllers/movie/movie.controller.php',
    '/ticket' => 'controllers/ticket/ticket.controller.php',
    '/contact' => 'controllers/contact/contact.controller.php',
    '/register' => 'controllers/register/register.controller.php',
    '/logout' => 'controllers/logout/logout.controller.php',
    '/validate' => 'controllers/register/register.validation.controller.php',
    '/login' => 'controllers/login/login.controller.php',
    '/detail' => 'controllers/detail/detail.controller.php',
    // Seller 
    '/seller' => 'controllers/seller/seller.controller.php',
    '/form-movie' => 'controllers/seller/seller.controller.php',
    '/edit' => 'controllers/seller/seller.controller.php',
    '/create' => 'controllers/seller/seller.create.controller.php',
    '/user' => 'controllers/users/user.controller.php',
    '/delete' => 'controllers/delete/delete.controller.php',
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
   http_response_code(404);
   require 'views/errors/404.php';
   die();
}

