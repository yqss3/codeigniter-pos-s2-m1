<?php

namespace Config;

use CodeIgniter\Config\Services;

$routes = Services::routes();

if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('TasksController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

// Tasks for Today Management System
$routes->get('/', 'TasksController::index');
$routes->get('tasks', 'TasksController::tasks');
$routes->get('profile', 'TasksController::profile');
$routes->get('about', 'TasksController::about');