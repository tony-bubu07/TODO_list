<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Laravelの認証機能Authファザード使用
use Illuminate\Support\Facades\Auth;

// 使用するモデル一覧
// ユーザー
use App\Models\User;
// タスクが振り分けられたフォルダー
use App\Models\Folder;
// タスクを得るモデル
use App\Models\Task;

// フォルダーを作るときのバリデーションを指定しているRequests
use App\Http\Requests\CreateFolder;


class FolderController extends Controller
{
    /**
     * フォルダを表示
     * GET /folders/create
     */
    public function showCreateForm()
    {
        return view('folders.create');
    }

    /**
     * フォルダの追加処理
     * POST /folders/create
     */
    // 引数にインポートしたRequestクラスを受け入れる
    public function create(CreateFolder $request)
    {
        // フォルダモデルのインスタンスを作成する
        $folder = new Folder();
        // タイトルに入力値を代入する
        $folder->title = $request->title;
        // ユーザーに紐づけて保存
        Auth::user()->folders()->save($folder);
        // インスタンスの状態をデータベースに書き込む
        $folder->save();

        return redirect()->route('tasks.index', [
            'id' => $folder->id,
        ]);
    }
}
