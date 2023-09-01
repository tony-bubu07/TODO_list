<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// LaravelのDBファザード使用
use Illuminate\Support\Facades\DB;

class Folder extends Model
{
    // use HasFactory;


    public function tasks()
    {
        return $this->hasMany('App\Models\Task');

        // return $this->hasMany('App\Models\Task');を省略せずに書いた形
        return $this->hasMany('App\Models\Task', 'folder_id', 'id');
    }
}