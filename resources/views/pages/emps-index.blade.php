@extends('templates/template')

@section('main')
    
    <ul>
        @foreach ($emp as $item)
            <li>
                <a href="#">{{$item -> name}}</a>
            </li>
        @endforeach
    </ul>

@endsection