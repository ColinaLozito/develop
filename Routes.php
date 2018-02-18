<?php 

// use App\Controllers\Index; 
// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';
// Create Router instance
$router = new \Bramus\Router\Router();
// Define routes
// ...
$router->set404(function() {
    header('HTTP/1.1 404 Not Found');
    echo "pagina no encontrada";
});

$router->get('/', '\App\Controllers\IndexController@index');
$router->get('/register', '\App\Controllers\IndexController@register');
$router->post('/create_user', '\App\Controllers\UserController@create_user');
$router->get('/users_list', '\App\Controllers\UserController@get_users');
$router->get('/delete_user/{id}', '\App\Controllers\UserController@delete_user');

$router->get('/edit/{id}', '\App\Controllers\UserController@edit');
$router->post('/edit_user/{id}', '\App\Controllers\UserController@edit_user');

// Run it!
$router->run();




