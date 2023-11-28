<?php
require_once __DIR__ . '/../vendor/autoload.php';

use \App\Controllers\HomeController;
use \App\Core\Application;
use \App\Controllers\ContactController;

$app = new Application();

$app->addRoute('GET', '/', [HomeController::class, 'home']);

$app->addRoute('GET', '/contact', [ContactController::class, 'contact']);

$app->addRoute('POST', '/contact-save', [ContactController::class, 'contactSave']);

$app->run();