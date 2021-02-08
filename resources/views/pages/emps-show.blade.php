@extends('templates/template')

@section('main')
    
    {{$emp -> name}} <br>
    {{$emp -> lastname}}
    <br>
    <ol>
        @foreach ($emp -> tasks as $task)
            <li>
                Task: {{ $task -> title }}
                <ul> 
                    @foreach ($task -> types as $type)
                         <li>Type: {{ $type -> name }} </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ol>

@endsection