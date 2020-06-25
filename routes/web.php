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

// displays index page and shows all projects
Route::get('/', "ProjectController@listProjects");
// retrives a page to add a new project
Route::get('/projects/add', "ProjectController@addProject");
// retrieves project details via wildcard ID
Route::get('/projects/{id}', "ProjectController@showProject");
// retrieves the page to add task to a specific project
Route::get('/projects/{id}/task/add',"TaskController@addTask");


// uses post request to add new task for a project
Route::post('/projects/{id}/task/add',"TaskController@storeTask");
// uses post request to add new project
Route::post('/projects/add', "ProjectController@storeProject");


// uses put request to update task status
Route::put('/tasks/{id}', "TaskController@updateTask");
