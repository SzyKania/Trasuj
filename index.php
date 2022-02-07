<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('friends', 'DefaultController');
Routing::get('routedetails', 'RouteController');
Routing::get('routes', 'RouteController');
Routing::get('favourites', 'UserController');
Routing::get('users', 'UserController');
Routing::get('profile', 'UserController');

Routing::post('addRoute', 'RouteController');
Routing::post('search', 'RouteController');
Routing::post('addReview', 'ReviewController');
Routing::post('logout', 'SecurityController');
Routing::post('register', 'SecurityController');
Routing::post('login', 'SecurityController');
Routing::post('follow', 'UserController');
Routing::post('unfollow', 'UserController');
Routing::post('favourite', 'UserController');
Routing::post('unfavourite', 'UserController');

Routing::run($path);