<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\Type;
use App\Employee;

use Illuminate\Support\Facades\Validator; // validator

class TaskController extends Controller
{
    // TASKS FUNCTION 

    public function taskIndex() {
        $task = Task::all();
        return view('pages.tasks.index', compact('task'));
    }

    public function taskShow($id) {
        $task = Task::findOrFail($id);
        return view('pages.tasks.show', compact('task'));
    }

    public function taskCreate() {
        $emps = Employee::all();
        $types = Type::all();
        return view('pages.tasks.create', compact('emps', 'types'));
    }

    public function taskStore(Request $request) {

        $data = $request -> all();

        // validation

        Validator::make($data, [

            'title' => 'required|min:5|max:64',
            'description' => 'required|min:20|max:200',
            'priority' => 'required|numeric|between:1,5',
            'employee_id' => 'required',
            'types' => 'required',

        ]) -> validate(); // validation

        $emp = Employee::findOrFail($data['employee_id']);
        $task = Task::make($data);
        $task -> employee() -> associate($emp);
        $task -> save();

        $types = Type::findOrFail($data['types']);
        $task -> types() -> attach($types);

        // dd($task);
        return redirect() -> route('tasks-index');
    }

    public function taskEdit($id) {
        $task = Task::findOrFail($id);
        $emps = Employee::all();
        $types = Type::all();

        return view('pages.tasks.edit', compact('task', 'emps', 'types'));
    }

    public function taskUpdate(Request $request, $id) {
        //
    }
}
