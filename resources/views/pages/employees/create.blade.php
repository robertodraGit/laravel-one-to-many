@extends('templates/template')

@section('main')
    
    <h1>New employee</h1>

    <h3>
        <a href="{{ route('emps-index') }}">Go back</a>
    </h3>

    <form action="{{ route('emps-store') }}" method="POST">

        @csrf 
        @method('POST')

        <label for="name">Name:</label>
        <input name="name" type="text">
        <br>
        <label for="lastname">Lastname:</label>
        <input name="lastname" type="text">
        <br>
        <label for="birthdate">Birthdate:</label>
        <input name="birthdate" type="date">
        <br>
        <input type="submit">
    </form>

@endsection