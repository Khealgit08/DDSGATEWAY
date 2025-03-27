<?php

use App\Http\Controllers\UserController;

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('/users', 'UserController@getUsers');
    $router->post('/users', 'UserController@addUser');
    $router->get('/users/{id}', 'UserController@getUserById'); // FIXED
});
