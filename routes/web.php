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
//    $tasks = DB::table('tasks')->get();
    $tasks = App\Task::all();
    return view('welcome', compact('tasks'));
});

//Route::get('/tasks/{task}', function ($id) {
////    $task = DB::table('tasks')->find($id);
//    $task = App\Task::find($id);
//    return view('tasks.show', compact('task'));
//});
//
//Route::get('/tasks', function () {
////    $task = DB::table('tasks')->find($id);
//    $tasks = App\Task::incompleted();
//    return view('welcome', compact('tasks'));
//});

Route::get('/tasks','TasksController@index');
Route::get('/tasks/{task}','TasksController@show');
//Route::get('/', 'PostsController@index');
Route::get('/show', 'PostsController@show');
Route::get('send', 'MailController@send');
Route::get('users', 'Pagination@users');

Route::get('hello', function () {
    return view('hello', ['name'=>'Alex']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
