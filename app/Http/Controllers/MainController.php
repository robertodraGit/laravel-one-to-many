<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\Type;
use App\Employee;


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

    public function taskCreate() {
        $emps = Employee::all();
        $types = Type::all();
        return view('pages.task-create', compact('emps', 'types'));
    }

    public function taskStore(Request $request) {

        $data = $request -> all();

        $emp = Employee::findOrFail($data['employee_id']);
        $task = Task::make($request -> all());
        $task -> employee() -> associate($emp);
        $task -> save();

        $types = Type::findOrFail($data['types']);
        $task -> types() -> attach($types);

        dd($task);
    }

    public function taskEdit($id) {
        $task = Task::findOrFail($id);
        $emps = Employee::all();
        $types = Type::all();

        return view('pages.task-edit', compact('task', 'emps', 'types'));
    }

    public function taskUpdate(Request $request, $id) {
        //
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

