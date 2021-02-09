@extends('templates/template')

@section('main')
    
    <h1>Edit employee {{ $emp -> name }}</h1>

    <h3>
        <a href="{{ route('emps-index') }}">Go back</a>
    </h3>

    <form action="{{ route('emps-update', $emp -> id) }}" method="POST">

        @csrf 
        @method('POST')

        <label for="name">Name:</label>
        <input name="name" value='{{ $emp -> name }}' type="text">
        <br>
        <label for="lastname">Lastname:</label>
        <input name="lastname" value='{{ $emp -> lastname }}' type="text">
        <br>
        <label for="birthdate">Birthdate:</label>
        <input name="birthdate" value='{{ $emp -> birthdate }}' type="date">
        <br>
        <input type="submit">
    </form>

@endsection