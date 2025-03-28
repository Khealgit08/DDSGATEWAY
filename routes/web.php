<?php
/** @var \Laravel\Lumen\Routing\Router $router */
/*
|---------------------------------------------------------------------
-----
| Application Routes
|---------------------------------------------------------------------
-----
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$router->get('/', function () use ($router) {
    return $router->app->version();
});
// unsecure routes
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('/users',['uses' => 'User2Controller@getUsers']);
    $router->get('/users',['uses' => 'User2Controller@getUsers']);
    $router->get('/users', 'User2Controller@index'); // get all usersrecords
    $router->post('/users', 'User2Controller@add'); // create new userrecord
    $router->get('/users/{id}', 'User2Controller@show'); // get user by id
    $router->put('/users/{id}', 'User2Controller@update'); // update userrecord
    $router->patch('/users/{id}', 'User2Controller@update'); // update userrecord
    $router->delete('/users/{id}', 'User2Controller@delete'); // deleterecord
});