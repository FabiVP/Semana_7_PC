<!-- Heredar el código de la plantilla -->
@extends('layouts.plantilla')

<!-- Modificar la sección del título -->
@section('title', 'Nuevo Curso')

<!-- Personalizar el contenido de la página (content) -->
@section('content')
    <h1>En esta página podrás crear un nuevo curso.</h1>

    <!-- formulario para crear un nuevo curso -->
    <form action="{{ route('cursos.store') }}" method="POST">
        <!-- token de seguridad para evitar ataques CSRF -->
        @csrf

        <label> 
            Nombre:
            <br>
            <input type="text" name="name"><!-- el campo name es tipo STRING -->
        </label>
        <br>
        <label> 
            Descripción:
            <br>
            <textarea name="description" rows="5"> </textarea> <!-- el campo description es tipo TEXT -->
        </label>
        <br>
        <label> 
            Categoría:
            <br>
            <input type="text" name="category"> <!-- el campo categoriy es de tipo String -->
        </label>
        <br>
        <button type="submit">enviar formulario</button> <!-- botón para enviar el formulario -->
    </form>    
@endsection