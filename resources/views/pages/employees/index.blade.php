@extends('templates/template')

@section('main')

<h2>
    <a href="{{ route('emps-create') }}">Add employee</a>
</h2>

<h3>
    <a href="{{ route('home') }}">Go back</a>
</h3>
    
    <ul>
        @foreach ($emp as $item)
            <li>
                <a href="{{ route('emps-show', $item -> id) }}">{{$item -> name}}</a> - 
                <a href="{{ route('emps-edit', $item -> id) }}">EDIT</a>
            </li>
        @endforeach
    </ul>

@endsection