@extends('layouts.plantilla')

@section('title','Crear curso')
@section('content')

    <h1>En esta pagina podras crear un curso</h1>
    
    <form action="{{route('cursos.store')}}" method="POST">
        
        @csrf
        
        <label >
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label >
            Descripcion:
            <br>
            <textarea name="description" rows="5" value="{{old('description')}}"></textarea>
        </label>
        @error('description')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label >
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>
        @error('categoria')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <button type="submit">Enviar el formulario</button>
    </form>
@endsection
