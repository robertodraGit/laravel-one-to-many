@extends('templates/template')

@section('main')

<h2>
    <a href="{{ route('types-create') }}">Add type</a>
</h2>
<h3>
    <a href="{{ route('home') }}">Go back</a>
</h3>
    
    <ul>
        @foreach ($type as $item)
            <li>
                <a href="{{route('types-show', $item -> id)}}">{{$item -> name}}</a> - 
                <a href="{{ route('types-edit', $item -> id) }}">EDIT</a>
            </li>
        @endforeach
    </ul>

@endsection