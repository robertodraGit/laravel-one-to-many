@extends('templates/template')

@section('main')

<h2>
    <a href="{{ route('tasks-create') }}">Add new task</a>
</h2>

<h3>
    <a href="{{ route('home') }}">Go back</a>
</h3>
    
    <ul>
        @foreach ($task as $item)
            <li>
                <a href="{{ route('tasks-show', $item -> id) }}">{{$item -> title}}</a> <br>
                <a href="{{ route('tasks-edit', $item -> id) }}">EDIT</a>
                <br>
                <span>{{$item -> description}}</span>
            </li>
        @endforeach
    </ul>

@endsection