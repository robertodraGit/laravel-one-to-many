@extends('templates/template')

@section('main')

<h1>
    Laravel One To Many Homepage
</h1>

<h3>
    Click on the following links to see the indexes
</h3>

<a href="{{route('emps-index')}}">Employees Index</a> 
<br>
<a href="{{route('tasks-index')}}">Tasks Index</a>
    
@endsection