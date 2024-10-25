h<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('index', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('login','home::login');
$routes->get('acercade','home::acercade');
$routes->get('registro','home::registro');
