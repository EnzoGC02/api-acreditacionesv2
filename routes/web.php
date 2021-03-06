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


$router->group(['prefix'=>'v1'],function () use ($router){
    $router->group(['prefix'=>'eventos'],function () use ($router){
        $router->post('/',['uses'=>'EventoController@store']);
        $router->get('/',['uses'=>'EventoController@index']);
        $router->get('/{id}',['uses'=>'EventoController@show']);
        // $router->post('/{id}/acreditar',['uses'=>'EventoController@acreditarPersona']);
    });

    $router->group(['prefix'=>'personas'],function () use ($router){
        $router->post('/',['uses'=>'PersonaController@store']);
        $router->delete('/{id}',['uses'=>'PersonaController@delete']);
    });

});
