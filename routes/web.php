<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// displays index page
Route::get('/', function () {
    return view('index');
});

// retrieves project details via wildcard ID
Route::get('/project/{id}', "ProjectController@showProject");
