<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return  view('welcome');
});

Route::get('/string', function () {
    return  "string";
});

//with params
Route::get('/hello/{name}', function($name){
    return "Hello $name";
});

//with params not mandatory
Route::get('/user/{name?}', function($name = 'Nant-Default'){
    return "Hello $name";
});

//with params and validation type
Route::get('/user-valid/{name}', function($name){
    return "Hello $name";
})->where('name', '[A-Za-z]+');