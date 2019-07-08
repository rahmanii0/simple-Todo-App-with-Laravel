<?php

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


Route::get('/',function (){

    return view('welcome');
});

Route::get('todos', ['uses'=>'TodoController@index','as'=>'todos']);
Route::get('todos/delete/{id}', [
    'uses'=>'TodoController@delete',
    'as'=>'todo.delete'
]);
Route::get('todos/update/{id}', [
    'uses'=>'TodoController@update',
    'as'=>'todo.update'
]);
Route::post('todos/save/{id}', [
    'uses'=>'TodoController@save',
    'as'=>'todo.save'
]);
Route::get('todos/completed/{id}',[
    'uses' => 'TodoController@completed',
    'as'=>'todos.completed'
    ]);
Route::post('todos/create', 'TodoController@store');


