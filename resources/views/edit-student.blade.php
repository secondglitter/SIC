@extends('plantilla')
@section('titulo')
    Agregar estudiante
@endsection
@section('contenido')

<form action="{{route('estudiante.update',$students->id)}}" method="POST">
@csrf
@method('put')
<br>
<a href="{{ route('estudiantes') }}"><button class="boton" type="button">Regresar</button></a>
<button class="boton" type="submit">Editar</button>
<br><br>
<input type="text" name="name_student" placeholder="Nombre" value="{{ $students->name_student }}">
@error('name_student')
    <div style="color:red">{{ $message }}</div>
@enderror
</form>
<br><br><br>
<!-- LO UNICO QUE HICE FUE COPIAR UN CAMPO DEL FORMULARIO DE AGREGAR, PARA PODER HACER LA PRUEBA DE EDICIÓN -->
@endsection