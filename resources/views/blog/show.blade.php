@extends('layouts.plantilla')

@section('title', 'Ver Blog '. $blog)
@section('content')
    <h1>Hola blogs: {{$blog}}</h1>
@endsection