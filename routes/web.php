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
    return view('index');
});
$router->get('kitab', 'KitabController@index');

$router->get('hadits', 'HaditsController@getHaditsRandom');
$router->get('hadits/search', 'HaditsController@searchHadits');
$router->get('hadits/{kitab_id}', 'HaditsController@getHaditsRandomByKitabId');
$router->get('hadits/{kitab_id}/{paginate}', 'HaditsController@getHaditsByKitabIdLimited');

