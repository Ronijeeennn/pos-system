<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Landing page
$routes->get('/', 'Pages::landing');

// About page
$routes->get('about', 'Pages::about');

// Customer Accounts page (static array data source for now)
$routes->get('customers', 'Customers::index');

// User Accounts page (static array data source for now)
$routes->get('users', 'Users::index');
