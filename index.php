<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Router::get('', 'DefaultController');
Router::get('login', 'DefaultController');
Router::get('signUp', 'DefaultController');
Router::get('dashboard', 'DefaultController');
Router::get('chooseCategory', 'DefaultController');
Router::get('orderForm', 'DefaultController');
Router::get('success', 'DefaultController');
Router::get('account', 'DefaultController');
Router::get('FileNotFound', 'ErrorController');
Router::post('login', 'SecurityController');

Router::run($path);