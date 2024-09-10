<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
//$path = base_path('public/src/index.html');
$router->get('/', function () use ($router) {
        return file_get_contents('../public/src/index.html');
});

$router->group(['prefix' => 'api'], function() use ($router){
    $router->get('/users', 'UserController@read_all'); 
    $router->post('/users', 'UserController@create'); 
    $router->get('/users/{id}', 'UserController@read'); 
    $router->put('/users/{id}', 'UserController@update'); 
    $router->delete('/users/{id}', 'UserController@delete'); 
});
