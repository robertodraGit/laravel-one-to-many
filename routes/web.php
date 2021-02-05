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
