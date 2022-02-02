<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('browse', 'DefaultController');
Routing::get('favourites', 'DefaultController');
Routing::get('friends', 'DefaultController');
Routing::get('profile', 'DefaultController');
Routing::get('routedetails', 'DefaultController');
Routing::get('users', 'DefaultController');
Routing::post('login', 'SecurityController');
Routing::post('addRoute', 'UploadController');
Routing::run($path);