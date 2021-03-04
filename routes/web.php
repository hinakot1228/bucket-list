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

// Route::get('/', function () {
//     return view('welcome');
// });

// タスク一覧機能（自分の判断で追記）
// Route::get('/folders/{id}/tasks', 'TaskController@index')->name('tasks.index');

// フォルダ一覧表示機能
Route::get('/folders/{id}/tasks', 'TaskController@index')->name('folders.create');

//  フォルダ作成機能
Route::get('/folders/create', 'FolderController@showCreateForm')->name('folders.create');
//  フォルダ作成機能
Route::post('/folders/create', 'FolderController@create');