<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\Type;
use App\Employee;

use Illuminate\Support\Facades\Validator; // validator

class TypeController extends Controller
{
    
    // TYPES FUNCTIONS

    public function typeIndex() {
        $type = Type::all();
        return view('pages.types.index', compact('type'));
    }

    public function typeShow($id) {
        $type = Type::findOrFail($id);
        return view('pages.types.show', compact('type'));
    }

    public function typeCreate() {
        return view('pages.types.create');
    }

    public function typeStore(Request $request) {
        $data = $request -> all();

        Validator::make($data, [

            'name' => 'required|min:3|max:20',
            'description' => 'required|min:10|max:64'

        ]) -> validate();

        $tasks = Task::findOrFail($data['tasks']);

        $newType = Type::create($data);
        $newType -> tasks() -> attach($tasks);
        $newType -> save();

        return redirect() -> route('types-index');
    }

    public function typeEdit($id) {
        $type = Type::findOrFail($id);

        return view('pages.types.edit', compact('type'));
    }

    public function typeUpdate(Request $request, $id) {
        $data = $request -> all();

        Validator::make($data, [

            'name' => 'required|min:3|max:20',
            'description' => 'required|min:10|max:64'

        ]) -> validate();

        $type = Type::findOrFail($id);
        $type -> update($data);
    }
}
