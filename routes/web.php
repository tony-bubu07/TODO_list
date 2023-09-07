<?php

use Illuminate\Support\Facades\Route;

// 使用するコントローラー
// ホームに遷移する用
use App\Http\Controllers\HomeController;
// 認証機能用
use Illuminate\Support\Facades\Auth;
// index.blade.phpへのデータベース内容表示用 兼 タスク追加用
use App\Http\Controllers\TaskController;
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

Route::group(['middleware' => 'auth'], function () {

    /** 
     * Route::get('/', function () { return view('welcome'); });
     */

    Route::get('/', [HomeController::class, 'index'])->name('home');


    // タスク一覧ページを表示 開発URL: http://localhost/folders/1/tasks
    Route::get('/folders/{id}/tasks', [TaskController::class, 'index'])->name('tasks.index');

    // フォルダ作成ページを表示
    Route::get('/folders/create',  [FolderController::class, 'showCreateForm'])->name('folders.create');
    // フォルダ作成処理を実行
    Route::post('/folders/create', [FolderController::class, 'create']);

    // タスク作成ページを表示
    Route::get('/folders/{id}/tasks/create',  [TaskController::class, 'showCreateForm'])->name('tasks.create');
    // タスク作成処理を実行
    Route::post('/folders/{id}/tasks/create', [TaskController::class, 'create']);

    // タスク編集ページを表示
    Route::get('/folders/{id}/tasks/{task_id}/edit', [TaskController::class, 'showEditForm'])->name('tasks.edit');
    // タスク編集処理を実行
    Route::post('/folders/{id}/tasks/{task_id}/edit',  [TaskController::class, 'edit']);
});

// 認証機能
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
