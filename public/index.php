<?php

use App\Application;

require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/../app/helper.php";

$app = Application::getInstance(dirname(__DIR__));

$app->router->get('/', 'home');
$app->router->get('/about', 'about');

$app->run();