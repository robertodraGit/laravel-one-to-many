@extends('templates/template')

@section('main')
    
    <h1>New type</h1>

    <h3>
        <a href="{{ route('types-index') }}">Go back</a>
    </h3>

    <form action="{{ route('types-store') }}" method="POST">

        @csrf 
        @method('POST')

        <label for="name">Name:</label>
        <input name="name" type="text">
        <br>
        <label for="description">Description:</label>
        <input name="description" type="text">
        <br>
        <input type="submit">
    </form>

@endsection