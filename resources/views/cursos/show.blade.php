@extends('layouts.plantilla')

@section('title','Curso '.$curso)
@section('content')

{{-- se muestra la variable en la vista sin 'echo' --}}
<h1>Bienvenido al curso: {{$curso}}</h1>

@endsection
