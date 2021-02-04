<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;
use App\Task;

class MainController extends Controller
{
    public function empIndex() {
        $emp = Employee::all();
        return view('pages.emps-index', compact('emp'));
    }

    public function taskIndex() {
        $task = Task::all();
        return view('pages.tasks-index', compact('task'));
    }
}

