@extends('templates/template')

@section('main')
    
    <ul>
        @foreach ($task as $item)
            <li>
                <a href="#">{{$item -> title}}</a> 
                <br>
                <span>{{$item -> description}}</span>
            </li>
        @endforeach
    </ul>

@endsection