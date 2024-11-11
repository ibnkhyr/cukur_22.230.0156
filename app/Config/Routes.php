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

$routes->get('/admin', 'AdminController::Dashboard');
$routes->get('dashboard.php', 'AdminController::Utama' , ['as' => 'admin.Dasboard']);
$routes->get('orders.php', 'AdminController::Orders', ['as' => 'admin.Orders']);
$routes->get('packages.php', 'AdminController::Packages', ['as' => 'admin.Packages']);
$routes->get('menu.php', 'AdminController::Menu', ['as' => 'admin.Menu']);
$routes->get('payments.php', 'AdminController::Payments', ['as' => 'admin.Payments']);
$routes->get('transactions.php', 'AdminController::Transactions', ['as' => 'admin.Transactions']);

//pelanggan

$routes->get('pelanggan-dashboard', 'PelangganController::Dashboard' , ['as' => 'pelanggan.Dasboard']);
$routes->get('pelanggan-packages', 'PackageController::Index',);
$routes->get('pelanggan-menu', 'MenuController::Index',);
//pelanggan/package
$routes->get('package/(:num)', 'PackageController::detail/$1');
$routes->get('package/order/(:num)', 'PackageController::createOrder/$1');
$routes->post('package/submitOrder', 'PackageController::submitOrder');
$routes->get('package/orderDetail', 'PackageController::viewOrder');
$routes->get('package/confirmPayment', 'PackageController::confirmPayment');
$routes->get('package/paymentSuccess', 'PackageController::paymentSuccess');
//pelanggan/menu
$routes->get('/menu/detail/(:num)', 'MenuController::detail/$1');




$routes->get('pelanggan-custom_menu.php', 'PelangganController::Custom_menu' , ['as' => 'pelanggan.Custom_menu']);
$routes->get('pelanggan-order_history.php', 'PelangganController::Order_history' , ['as' => 'pelanggan.Order_history']);
$routes->get('pelanggan-payment.php', 'PelangganController::Payment' , ['as' => 'pelanggan.Payment']);
$routes->get('pelanggan-profile.php', 'PelangganController::Profile' , ['as' => 'pelanggan.Profile']);




