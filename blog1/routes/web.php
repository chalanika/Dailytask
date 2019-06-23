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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/log',function(){
    return view('aboutus');
});
Route::get('/about','PagesController@indexabout');
//Route::get('/task','TaskController@viewTask');
Route::get('/task',function(){
$data=App\Task::all();

    return view ('task')->with('tasks',$data);
});

Route::post('/saveTask','TaskContr@store');

Route::get('/markascompleted/{id}','TaskContr@updateiscompleted');
Route::get('/markasnotcompleted/{id}','TaskContr@updatenot');
Route::get('/delete/{id}', 'TaskContr@delete');
Route::get('update/{id}','TaskContr@updateview');
Route::post('updatetask','TaskContr@updatetask');