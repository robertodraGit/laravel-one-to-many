<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

// emps routes
Route::get('/emps', 'MainController@empIndex') -> name('emps-index');
Route::get('/emps/{id}', 'MainController@empShow') -> name('emps-show');

// tasks routes
Route::get('/tasks', 'MainController@taskIndex') -> name('tasks-index');
Route::get('/task/{id}', 'MainController@taskShow') -> name('tasks-show');

Route::get('/createTask', 'MainController@taskCreate') -> name('tasks-create');
Route::post('/storeTask', 'MainController@taskStore') -> name('tasks-store');

Route::get('/tasks/edit/{id}', 'MainController@taskEdit') -> name('tasks-edit');

// types routes
Route::get('/types', 'MainController@typeIndex') -> name('types-index');
Route::get('/type/{id}', 'MainController@typeShow') -> name('types-show');