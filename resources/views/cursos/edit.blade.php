@extends('layouts.plantilla')

@section('title','Cursos edit')
@section('content')

    <h1>En esta pagina podras editar un curso</h1>
    
    <form action="{{route('cursos.update', $curso)}}" method="POST">
        
        @csrf
        {{-- de esta forma laravel entiendo que el metodo a utilizar es put 
        y en el method del form se deja en POST --}}
        @method('put')

        <label >
            Nombre:
            <br>
            <input type="text" name="name" value="{{$curso->name}}">
        </label><br>
        <label >
            Descripcion:
            <br>
            <textarea name="description" rows="5">{{$curso->description}}</textarea>
        </label><br>
        <label >
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{$curso->categoria}}">
        </label>
        <br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection
