<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;
use App\Task;
use App\Type;

class MainController extends Controller
{

    // EMPS FUNCTIONS

    public function empIndex() {
        $emp = Employee::all();
        return view('pages.emps-index', compact('emp'));
    }

    public function empShow($id) {
        $emp = Employee::findOrFail($id);
        return view('pages.emps-show', compact('emp'));
    }

    // TASKS FUNCTION 

    public function taskIndex() {
        $task = Task::all();
        return view('pages.tasks-index', compact('task'));
    }

    public function taskShow($id) {
        $task = Task::findOrFail($id);
        return view('pages.tasks-show', compact('task'));
    }

    // TYPES FUNCTIONS

    public function typeIndex() {
        $type = Type::all();
        return view('pages.types-index', compact('type'));
    }

    public function typeShow($id) {
        $type = Type::findOrFail($id);
        return view('pages.types-show', compact('type'));
    }
}

