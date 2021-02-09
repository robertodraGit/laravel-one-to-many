@extends('templates/template')

@section('main')
    
    <h1>New task</h1>

    <form action="{{ route('tasks-store') }}" method="POST">

        @csrf 
        @method('POST')

        <label for="title">Title</label>
        <input name="title" type="text">
        <br>
        <label for="description">Description</label>
        <input name="description" type="text">
        <br>
        <label for="priority">Priority</label>
        <input name="priority" type="number">
        <br>
        <label for="employee_id">Employee</label>
        <select name="employee_id">
            @foreach ($emps as $emp)
                <option value="{{ $emp -> id }}">
                    {{ $emp -> name }} 
                    {{ $emp -> lastname }}
                </option>
            @endforeach
            
        </select>
        <br>

        <label for="types[]">Types</label> <br>
        @foreach ($types as $type)
            <input name='types[]' type="checkbox" value='{{ $type -> id }}'> {{ $type -> name }} <br>
        @endforeach
        
        <br>

        <input type="submit">
    </form>

@endsection