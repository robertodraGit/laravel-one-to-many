@extends('templates/template')

@section('main')
    
    <h1>Edit type {{ $type -> id }}</h1>

    <h3>
        <a href="{{ route('types-index') }}">Go back</a>
    </h3>

    <form action="{{ route('types-update', $type -> id) }}" method="POST">

        @csrf 
        @method('POST')

        <label for="name">Name:</label>
        <input name="name" value='{{ $type -> name }}' type="text">
        <br>
        <label for="description">Description:</label>
        <input name="description" value='{{ $type -> description }}' type="text">
        <br>
        <input type="submit">
    </form>

@endsection