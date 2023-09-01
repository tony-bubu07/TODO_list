<?php

use Illuminate\Support\Facades\Route;

// 使用するコントローラー
// index.blade.phpに表示用
use App\Http\Controllers\MainController;
// フォルダー追加用
use App\Http\Controllers\FolderController;

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

// タスク一覧ページを表示 開発URL: http://localhost/folders/1/tasks
Route::get('/folders/{id}/tasks', [MainController::class, 'index'])->name('tasks.index');

// フォルダ作成ページを表示
Route::get('/folders/create',  [FolderController::class, 'showCreateForm'])->name('folders.create');
// フォルダ作成処理を実行
Route::post('/folders/create' , [FolderController::class, 'create']);