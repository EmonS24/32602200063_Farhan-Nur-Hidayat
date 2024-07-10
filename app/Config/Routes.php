<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/form', 'Form::index');
$routes->match(['post'], '/form-submit', 'FormController::submit');


$routes->get('/latihanview', 'HelloWorld::index');

//tugas bab 4
$routes->get('/', 'Home::index');
$routes->get('/', 'HomeController::index');
$routes->get('/profile', 'ProfileController::index');
$routes->get('/experience', 'ExperienceController::index');