<?php

use App\Controllers\Admin\Users;
use App\Controllers\Coba;
use App\Controllers\Home;
use App\Controllers\Pages;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->get('/users/', 'Admin\Users::index'); #atau menggunakan
// $routes->get('/users', [Users::class, 'index']);
// $routes->get('/coba', [Coba::class, 'index']);
// $routes->get('/coba/about', [Coba::class, 'about']);
// $routes->get('/admin', [Users::class, 'index']);

$routes->get('/', [Pages::class, 'index']);
$routes->get('/pages/about', 'Pages::about');
$routes->get('/pages/contact', 'Pages::contact');

$routes->get('/komik', 'Komik::index');
$routes->get('/komik/(:segment)', 'Komik::detail/$1');
