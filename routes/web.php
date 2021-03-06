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

//  フォルダ作成ページの表示
Route::get('/folders/create', 'FolderController@showCreateForm')->name('folders.create');
//  フォルダ作成処理の実行
Route::post('/folders/create', 'FolderController@create');

// タスク作成ページの表示
Route::get('/folders/{id}/tasks/create', 'TaskController@createForm')->name('tasks.create');

// タスク作成処理の実行
Route::post('/folders/{id}/tasks/create', 'TaskController@create');

// タスク編集ページの実行
Route::get('/folders/{id}/tasks/{task_id}/edit', 'TaskController@showEditForm')->name('tasks.edit');

// タスク編集処理の実行
Route::post('/folders/{id}/tasks/{task_id}/edit', 'TaskController@edit');