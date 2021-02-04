<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/emps', 'MainController@empIndex') -> name('emps-index');
Route::get('/tasks', 'MainController@taskIndex') -> name('tasks-index');

