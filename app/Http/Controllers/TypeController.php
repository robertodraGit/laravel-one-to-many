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
}
