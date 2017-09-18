<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index() {
        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));
    }

    public function show(Task $task) {
        // $task = Task::find($id);
        
        // se o nome do wildcard for o mesmo do objeto esperado no controller, você NÃO
        // precisa fazer uma consulta no controller para que o Laravel assuma que você está
        // buscando um tal objeto com a wildcard esperada [geralmente ID]
        
        return view('tasks.show', compact('task'));
    }
}
