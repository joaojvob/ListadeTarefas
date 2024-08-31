<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all(); 
        // dd($tasks);  
        return view('index', ['tasks' => $tasks]);
    }
    
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);

        Task::create($request->all());
        return redirect()->route('index');
    }

    public function edit(Task $task)
    {
        return view('edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);

        $task->update($request->all());
        return redirect()->route('index');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('index');
    }
}
