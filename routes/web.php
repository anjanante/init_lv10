<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

//allow to generate /users, /users/create, /users/{user}, /users/{user}/edit, /users (POST), ...
Route::resource('users', UserController::class);

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

//with name
Route::get('/route-name', function(){
    return "MY name Route";
})->name('mynameroute');

Route::get('/test', function(){
    return redirect()->route('mynameroute');
});

//Check Redirection
Route::redirect('/here', '/there');
//for permanent
Route::redirect('/test', '/test1', 301); 
//or
// Route::permanentRedirect('/test', '/test1')

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class], 'index')->name('home');