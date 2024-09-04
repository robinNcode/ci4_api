<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
service('auth')->routes($routes, ['except' => ['login', 'register']]);

$routes->get('login', '\App\Controllers\Api\AuthController::loginView');
$routes->post('login', '\App\Controllers\Api\AuthController::login');
$routes->get('register', '\App\Controllers\Api\AuthController::registerView');
$routes->post('register', '\App\Controllers\Api\AuthController::register');

/**
 * API Routes
 */
$routes->group('api', ['namespace' => 'App\Controllers\Api'], function ($routes) {
    $routes->group('v1', function ($routes) {
        //Employee Department Routes
        $routes->resource('employee/departments', ['controller' => 'EmployeeDepartmentController']);

        //Employee Routes
        $routes->resource('employees', ['controller' => 'EmployeeController']);
    });
});