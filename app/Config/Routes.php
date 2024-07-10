<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/form', 'Form::index');
$routes->match(['post'], '/form-submit', 'FormController::submit');
