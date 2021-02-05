@extends('templates/template')

@section('main')
    
    <ul>
        @foreach ($emp as $item)
            <li>
                <a href="{{route('emps-show', $item -> id)}}">{{$item -> name}}</a>
            </li>
        @endforeach
    </ul>

@endsection