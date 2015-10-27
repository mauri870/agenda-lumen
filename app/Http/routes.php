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

//Home
$app->get('/',['as'=>'home','uses'=>'AgendaController@index']);

//Search letters
$app->get('/{letter}',['as'=>'home.letter','uses'=>'AgendaController@letter']);

//Search Persons
$app->post('/search',['as'=>'home.search','uses'=>'AgendaController@search']);

//Delete person
$app->get('/delete/person/{id}',['as'=>'home.delete.person','uses'=>'AgendaController@deletePerson']);

//Delete phone
$app->get('/delete/phone/{id}',['as'=>'home.delete.phone','uses'=>'AgendaController@deletePhone']);

