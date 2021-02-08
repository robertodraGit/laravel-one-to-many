@extends('templates/template')

@section('main')

<a href="{{ route('tasks-create') }}">Create new task</a>
    
    <ul>
        @foreach ($task as $item)
            <li>
                <a href="{{ route('tasks-show', $item -> id) }}">{{$item -> title}}</a> <br>
                <a href="{{ route('tasks-edit', $item -> id) }}"> EDIT</a>
                <br>
                <span>{{$item -> description}}</span>
            </li>
        @endforeach
    </ul>

@endsection