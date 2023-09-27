<?php

require __DIR__ . '/../vendor/autoload.php';

use ardiStory\Php\Mvc\App\Router;
use ardiStory\Php\Mvc\Controller\HomeController;
use ardiStory\Php\Mvc\Controller\ProductController;

Router::add('GET', '/product/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)', ProductController::class, 'categories');
Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello');
Router::add('GET', '/world', HomeController::class, 'world');
Router::add('GET', '/about', HomeController::class, 'about');

Router::run();
