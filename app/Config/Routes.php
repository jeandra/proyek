<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// login route
$routes->get('/', 'Auth::login');
$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::loginPost');
$routes->get('logout', 'Auth::logout');
$routes->get('dashboard', 'Dashboard::index');

//register route
$routes->get('register', 'Auth::register');
$routes->post('register', 'Auth::registerPost');



