<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// LaravelのDBファザード使用
use Illuminate\Support\Facades\DB;

// laravelのPasswordHashファザード使用
use Illuminate\Support\Facades\Hash;
// Laravelのに認証機能Authファザード使用
use Illuminate\Support\Facades\Auth;

// 使用するモデル一覧
// ユーザー
use App\Models\User;
// タスクが振り分けられたフォルダー
use App\Models\Folder;
// タスクを得るモデル
use App\Models\Task;


// phpmyAdmin 下記項目でログイン可能
// サーバー ： mysql
// ユーザー名： laradock
// パスワード ： laradock

class MainController extends Controller
{
    // index
    public function index(int $id)
    {
        // すべてのフォルダを取得する
        $folders = Folder::all();

        // 選ばれたフォルダを取得する
        $current_folder = Folder::find($id);

        // 選ばれたフォルダに紐づくタスクを取得する
        // リレーション前のコード
        // $tasks = Task::where('folder_id', $current_folder->id)->get();

        // ModelでhasMany使用してリレーションした時のコード
        $tasks = $current_folder->tasks()->get();

        // var_dump($folders_data);

        return view(
            'tasks.index',
            [
                'folders' => $folders,
                'current_folder_id' => $current_folder->id,
                'tasks' => $tasks,
            ]
        );
    }
}
