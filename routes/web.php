<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

// emps routes
Route::get('/emps', 'EmployeeController@empIndex') 
    -> name('emps-index');
Route::get('/emps/{id}', 'EmployeeController@empShow') 
    -> name('emps-show');
Route::get('/createEmployee', 'EmployeeController@empCreate') 
    -> name('emps-create');
Route::post('/storeEmployee', 'EmployeeController@empStore')
    -> name('emps-store');
Route::get('/emps/edit/{id}', 'EmployeeController@empEdit') 
    -> name('emps-edit');

// tasks routes
Route::get('/tasks', 'TaskController@taskIndex') 
    -> name('tasks-index');
Route::get('/tasks/{id}', 'TaskController@taskShow') 
    -> name('tasks-show');
Route::get('/createTask', 'TaskController@taskCreate') 
    -> name('tasks-create');
Route::post('/storeTask', 'TaskController@taskStore') 
    -> name('tasks-store');
Route::get('/tasks/edit/{id}', 'TaskController@taskEdit') 
    -> name('tasks-edit');

// types routes
Route::get('/types', 'TypeController@typeIndex')    
    -> name('types-index');
Route::get('/types/{id}', 'TypeController@typeShow')    
    -> name('types-show');
Route::get('/createType', 'TypeController@typeCreate') 
    -> name('types-create');
Route::post('/storeType', 'TypeController@typeStore')
    -> name('types-store');
Route::get('/types/edit/{id}', 'TypeController@typeEdit') 
    -> name('types-edit');