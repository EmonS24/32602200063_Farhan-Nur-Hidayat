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

$routes->get('/bab5', 'Layout::index');

//bab 6
$routes->get('/crud', 'Crud::index');
$routes->get('/crud/tambah', 'Crud::tambah');
$routes->match(['get', 'post'], '/crud/tambah', 'Crud::tambah');
$routes->get('/crud/hapus', 'Crud::hapus');
$routes->get('/crud/edit/(:segment)', 'Crud::edit/$1');
$routes->post('/crud/editan', 'Crud::editan');