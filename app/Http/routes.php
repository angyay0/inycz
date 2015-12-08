<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
  use YCZ\Property;
  use YCZ\Type;

Route::get('/', function () {
    return view('layouts.main');
});

Route::resource('properties', 'PropertyController');

Route::get('/list/{name}', function () {
    return view('layouts.list');
});

/*Route::get('/properties/{id}', function($id){
    $pro = Property::find($id);
    $typ = $pro->type;
    $ope = $pro->operation;
    return $pro->name." ".$typ->name." ".$ope->name;
});*/
