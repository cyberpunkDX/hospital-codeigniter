<?php

use App\Controllers\HomeController;
use App\Controllers\PageController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [HomeController::class, 'index']);
$routes->group('page', function ($routes) {
    $routes->get('about', [PageController::class, 'about'], ['as' => 'about']);
    $routes->get('contact', [PageController::class, 'contact'], ['as' => 'contact']);
});
