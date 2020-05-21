<?php

use Illuminate\Support\Facades\Route;

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


Route::group(['namespace' => 'AlexMK92\\StockService\\Http\\Controllers', 'prefix' => 'api'], function ($router) {
    $router->get('/stock', 'StockServiceController@get');
});
