<?php

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

$app->get('/', [
    'as' => 'etapa1', 'uses' => 'Etapa1Controller@mostrarUrl'
]);

$app->get('etapa1', [
    'as' => 'etapa1', 'uses' => 'Etapa1Controller@mostrarUrl'
]);

$app->get('etapa2', [
    'as' => 'etapa2', 'uses' => 'Etapa2Controller@mostrarUrl'
]);

$app->get('etapa3', [
    'as' => 'etapa3', 'uses' => 'Etapa3Controller@etapa3'
]);
