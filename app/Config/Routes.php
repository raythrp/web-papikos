<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Pages::landing');
$routes->get('/login', 'Pages::login');
$routes->get('/register', 'Pages::register');
$routes->post('/login', 'Pages::login');
$routes->post('/register', 'Pages::register');
$routes->get('/dashboard', 'Pages::dashboard');
$routes->get('/logout', 'Pages::logout');
$routes->get('/search', 'Pages::search'); //with parameter
$routes->get('/detail/(:segment)', 'Pages::detail/$1'); //with parameter
$routes->post('/proses/(:segment)/(:segment)/(:segment)', 'Pages::proses/$1/$2/$3'); //with parameter
$routes->get('/stopSewa/(:segment)/(:segment)', 'Pages::stopSewa/$1/$2/$3'); //with parameter
$routes->get('/profile/(:segment)', 'Pages::profile/$1');
$routes->get('/statusSewa/(:segment)', 'Pages::statusSewa/$1');
$routes->post('/updateProfile/(:segment)', 'Pages::updateProfile/$1');
$routes->get('/admin/(:segment)', 'Pages::admin/$1');
$routes->get('/adminDetail/(:segment)', 'Pages::adminDetail/$1');
$routes->get('/stopSewa/(:segment)', 'Pages::stopSewa/$1');
$routes->get('/search/(:segment)', 'Pages::search/$1');


// $routes->get('/', 'Home::index');
