<?php

namespace App\Http\Controllers;

use App\Folder;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // フォルダ一覧表示機能
    public function index(int $id)
    {
        $folders = Folder::all();
        // dd($folders);

        $current_folder = Folder::find($id);

        $tasks = Task::where('folder_id', $current_folder->id)->get();

        return view('tasks/index', [
            'folders' => $folders,
            'current_folder_id' => $current_folder->id,
            'tasks' => $tasks,
        ]);
    }

    // タスク作成ページの表示
    public function createForm(int $id)
    {
        return view('tasks/create', [
            'folder_id' => $id
            // フォルダのIDを受け取る
        ]);
    }
}
