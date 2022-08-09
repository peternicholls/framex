<?php

require __DIR__ . '/../vendor/autoload.php';

$container = new DI\Container();

$app = new FrameworkX\App(FrameworkX\Container::class);

$app->get('/', Acme\Todo\HelloController::class);
$app->get('/users/{name}', Acme\Todo\UserController::class);

$app->run();

