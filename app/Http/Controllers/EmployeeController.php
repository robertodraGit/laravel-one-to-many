<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\Type;
use App\Employee;

use Illuminate\Support\Facades\Validator; // validator

class EmployeeController extends Controller
{
    // EMPS FUNCTIONS

    public function empIndex() {
        $emp = Employee::all();
        return view('pages.employees.index', compact('emp'));
    }

    public function empShow($id) {
        $emp = Employee::findOrFail($id);
        return view('pages.employees.show', compact('emp'));
    }

    public function empCreate() {
        return view('pages.employees.create');
    }

    public function empStore(Request $request) {

        Validator::make($data, [

            'name' => 'required|min:4|max:64',
            'lastname' => 'required|min:4|max:64',
            'birthdate' => 'required|date'

        ]) -> validate(); // validazione

        Employee::create($data); // creazione employee dai dati validati

        return redirect() -> route('emps-index');
    }

    public function empEdit($id) {

        $emp = Employee::findOrFail($id);

        return view('pages.employees.edit', compact('emp'));
    }

    public function empUpdate(Request $request, $id) {

        $data = $request -> all();

        Validator::make($data, [

            'name' => 'required|min:4|max:64',
            'lastname' => 'required|min:4|max:64',
            'birthdate' => 'required|date'

        ]) -> validate();

        $emp = Employee::findOrFail($id);
        $emp -> update($data);
        
        return redirect() -> route('emps-show', $emp -> id);
    }
}
