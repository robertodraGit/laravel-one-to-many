@extends('templates/template')

@section('main')
    
    <h1>Edit task</h1>

    <form action="#" method="POST">

        @csrf 
        @method('POST')

        <label for="title">Title</label>
        <input name="title" type="text" value="{{$task -> title}}">
        <br>
        <label for="description">Description</label>
        <input name="description" type="text" value="{{$task -> description}}">
        <br>
        <label for="priority">Priority</label>
        <input name="priority" type="number" value="{{$task -> priority}}">
        <br>
        <label for="employee_id">Employee</label>
        <select name="employee_id">
            @foreach ($emps as $emp)

                <option value="{{ $emp -> id }}"
                    @if ($task -> employee -> id == $emp -> id)
                        selected
                    @endif
                >
                    {{ $emp -> name }} 
                    {{ $emp -> lastname }}
                </option>

            @endforeach
            
        </select>
        <br>

        <label for="types[]">Types</label> <br>
        @foreach ($types as $type)
            <input 
                name='types[]' 
                type="checkbox" 
                value='{{ $type -> id }}'

                @foreach ($task -> types as $tt)
                    @if ($tt -> id == $type -> id)
                        checked
                    @endif
                @endforeach
                
                {{-- @if (in_array(id, $task -> types) == in_array(id, $type))
                    checked
                @endif --}}
                > 
                    {{ $type -> name }} <br>
        @endforeach
        
        <br>

        <input type="submit">
    </form>

@endsection