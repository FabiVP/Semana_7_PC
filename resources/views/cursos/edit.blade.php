<!-- Heredar el código de la plantilla -->
@extends('layouts.plantilla')

<!-- Modificar la sección del título -->
@section('title', 'Editar Curso')

<!-- Personalizar el contenido de la página (content) -->
@section('content')
    <h1>EDITAR UN CURSO.</h1>

    <!-- formulario para crear un nuevo curso -->
    <form action="{{ route('cursos.update', $curso)}}" method="POST">
        <!-- token de seguridad para evitar ataques CSRF -->
        @csrf
        <!-- directiva para indicar el metodo PUT -->
        @method('put')

        <label> 
            Nombre:
            <br>
            <input type="text" name="name" value="{{$curso->name}}"><!-- el campo name es tipo STRING -->
        </label>
        <br>
        <label> 
            Descripción:
            <br>
            <textarea name="description" rows="5">{{$curso->description}}</textarea> <!-- el campo description es tipo TEXT -->
        </label>
        <br>
        <label> 
            Categoría:
            <br>
            <input type="text" name="category" value="{{$curso->category}}"> <!-- el campo categoriy es de tipo String -->
        </label>
        <br>
        <button type="submit">Actualizar formulario</button> <!-- botón para enviar el formulario -->
    </form>    
@endsection