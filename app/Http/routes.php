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

$app->get('/',['as'=>'home','uses'=>'AgendaController@index']);

$app->get('/{letter}',['as'=>'home.letter','uses'=>'AgendaController@letter']);

$app->post('/search',['as'=>'home.search','uses'=>'AgendaController@search']);
