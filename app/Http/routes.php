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
$app->get('/letter/{letter}',['as'=>'home.letter','uses'=>'AgendaController@letter']);

//Search Persons
$app->post('/search',['as'=>'home.search','uses'=>'AgendaController@search']);

//Delete person
$app->get('/delete/person/{id}',['as'=>'home.delete.person','uses'=>'AgendaController@deletePerson']);

//Delete phone
$app->get('/delete/phone/{id}',['as'=>'home.delete.phone','uses'=>'AgendaController@deletePhone']);

//Create Person
$app->get('/create/person',['as'=>'home.create.person','uses'=>'AgendaController@createPerson']);

$app->post('/create/person',['as'=>'home.create.person.post','uses'=>'AgendaController@createPersonPost']);

//Edit Person
$app->get('/edit/person/{id}',['as'=>'home.edit.person','uses'=>'AgendaController@editPerson']);

$app->post('/edit/person/{id}',['as'=>'home.edit.person.post','uses'=>'AgendaController@editPersonPost']);

//Create Phone
$app->get('/create/phone',['as'=>'home.create.phone','uses'=>'AgendaController@createPhone']);

$app->post('/create/phone',['as'=>'home.create.phone.post','uses'=>'AgendaController@createPhonePost']);

