<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('favourites', 'DefaultController');
Routing::get('friends', 'DefaultController');
Routing::get('profile', 'DefaultController');
Routing::get('routedetails', 'RouteController');
Routing::get('routes', 'RouteController');
Routing::get('users', 'UserController');

Routing::post('register', 'SecurityController');
Routing::post('login', 'SecurityController');
Routing::post('addRoute', 'RouteController');
Routing::post('search', 'RouteController');
Routing::post('addReview', 'ReviewController');

Routing::run($path);