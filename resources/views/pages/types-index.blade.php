@extends('templates/template')

@section('main')
    
    <ul>
        @foreach ($type as $item)
            <li>
                <a href="{{route('types-show', $item -> id)}}">{{$item -> name}}</a>
            </li>
        @endforeach
    </ul>

@endsection