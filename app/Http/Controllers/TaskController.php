<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        return Task::all();
    }

    public function show(Task $article)
    {
        return $article;
    }

    public function store(Request $request)
    {
        $article = Task::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, Task $task)
    {
        $task->update($request->all());

        return response()->json($task, 200);
    }

    public function delete(Task $article)
    {
        $article->delete();

        return response()->json(null, 204);
    }
}
