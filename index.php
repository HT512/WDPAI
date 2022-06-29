<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Router::get('', 'DefaultController');
Router::get('projects', 'DefaultController');
Router::get('register', 'DefaultController');
Router::get('profile', 'DefaultController');
Router::get('points', 'DefaultController');
Router::post('add_points', 'DefaultController');
Router::get('admin', 'DefaultController');
Router::get('movie', 'MovieController');
Router::post('buy', 'DefaultController');
Router::post('login', 'SecurityController');
Router::post('reg', 'SecurityController');
Router::get('logout', 'SecurityController');

Router::run($path);