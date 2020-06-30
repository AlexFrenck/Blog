<?php

session_start();

require __DIR__ . "/../init.php";

$pathInfo = $_SERVER['PATH_INFO'];

$routes = [
  '/index' => [
    'controller' => 'postsController',
    'method' => 'index'
  ],
  '/post' => [
    'controller' => 'postsController',
    'method' => 'show'
  ],

  '/login' => [
    'controller' => 'loginController',
    'method' => 'login'
  ],

  '/register' => [
    'controller' => 'registerController',
    'method' => 'register'
  ],
  '/dashboard' => [
    'controller' => 'loginController',
    'method' => 'dashboard'
  ],
  '/logout' => [
    'controller' => 'loginController',
    'method' => 'logout'
  ],
  '/posts-admin' => [
    'controller' => 'postsAdminController',
    'method' => 'index'
  ],
  '/posts-admin-create' => [
    'controller' => 'postsAdminController',
    'method' => 'create'
  ],
  '/posts-edit' => [
    'controller' => 'postsAdminController',
    'method' => 'edit'
  ],
  '/posts-delete' => [
    'controller' => 'postsAdminController',
    'method' => 'delete'
  ],
];

if (isset($routes[$pathInfo])) {
  $route = $routes[$pathInfo];
  $controller = $container->make($route['controller']);
  $method = $route['method'];
  $controller->$method();
}

 ?>
