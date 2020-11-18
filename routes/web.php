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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/key', function () {
    return \Illuminate\Support\Str::random(32);
});



$router->get('/short', 'ShortController@index' );

//list
$router->get('/short','ShortController@index');

//list by id
$router->get('/short/{id}','ShortController@show');
//add list
$router->post('/short','ShortController@store');

//upadate
$router->put('/short/{id}','ShortController@update');

//list
$router->delete('/short/{id}','ShortController@delete');
