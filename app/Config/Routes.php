<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');
$routes->get('/register', 'Home::register');
$routes->get('/flow', 'Home::flow');
$routes->get('/dadmin', 'Home::dadmin');
$routes->get('/dbarber', 'Home::dbarber');
$routes->get('/dpelanggan', 'Home::dpelanggan');
$routes->get('/customer/layanan', 'Home::layanan');
$routes->get('/customer/product', 'CustomerController::product');
// admin
$routes->get('/admin/manage_users', 'AdminController::Users');




