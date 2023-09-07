<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// LaravelのDBファザード使用
use Illuminate\Support\Facades\DB;

// laravelのPasswordHashファザード使用
use Illuminate\Support\Facades\Hash;
// Laravelの認証機能Authファザード使用
use Illuminate\Support\Facades\Auth;

// 使用するモデル一覧
// ユーザー
use App\Models\User;
// タスクが振り分けられたフォルダー
use App\Models\Folder;
// タスクを得るモデル
use App\Models\Task;
// タスク追加処理時にバリデーションするリクエスト
use App\Http\Requests\CreateTask;
// タスク編集時にバリデーションするリクエスト
use App\Http\Requests\EditTask;



// phpmyAdmin 下記項目でログイン可能
// サーバー ： mysql
// ユーザー名： laradock
// パスワード ： laradock

class TaskController extends Controller
{
    /**
     * index
     * get /folders/{id}/tasks
     */
    public function index(int $id)
    {
        // すべてのフォルダを取得する
        // $folders = Folder::all();
        
        // ユーザーのフォルダを取得する
        $folders = Auth::user()->folders()->get();

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

    /**
     * タスクを表示
     * GET /folders/{id}/tasks/create
     */
    public function showCreateForm(int $id)
    {
        return view('tasks.create', ['folder_id' => $id]);
    }

    /**
     * タスクの追加処理
     * POST /folders/{id}/tasks/create
     */
    public function create(int $id, CreateTask $request)
    {
        $current_folder = Folder::find($id);

        $task = new Task();
        $task->title = $request->title;
        $task->due_date = $request->due_date;

        $current_folder->tasks()->save($task);

        return redirect()->route('tasks.index', [
            'id' => $current_folder->id,
        ]);
    }

    /**
     * タスク編集を表示
     * GET /folders/{id}/tasks/{task_id}/edit
     */
    public function showEditForm(int $id, int $task_id)
    {
        $task = Task::find($task_id);

        return view('tasks.edit', [
            'task' => $task,
        ]);
    }

    /**
     * タスクの編集を処理
     * GET /folders/{id}/tasks/{task_id}/edit
     */
    public function edit(int $id, int $task_id, EditTask $request)
    {
        // リクエストされた task_id でタスクデータを取得
        $task = Task::find($task_id);

        // 編集対象のタスクデータに入力値を詰めて save
        $task->title = $request->title;
        $task->status = $request->status;
        $task->due_date = $request->due_date;
        $task->save();

        // 編集対象のタスクが属するタスク一覧画面へリダイレクト
        return redirect()->route('tasks.index', [
            'id' => $task->folder_id,
        ]);
    }
}
