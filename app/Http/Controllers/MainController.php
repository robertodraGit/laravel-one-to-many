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

    public function empShow($id) {
        $emp = Employee::findOrFail($id);
        return view('pages.emps-show', compact('emp'));
    }

    public function taskIndex() {
        $task = Task::all();
        return view('pages.tasks-index', compact('task'));
    }

    public function taskShow($id) {
        $task = Task::findOrFail($id);
        return view('pages.tasks-show', compact('task'));
    }
}

