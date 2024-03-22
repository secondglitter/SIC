@extends('plantilla')
@section('titulo')
    Detalles estudiante
@endsection
@section('contenido')
<br><br><br><br><br><br>
<a href="{{ route('estudiantes') }}"><button class="boton" type="button">Regresar</button></a>
<br><br>
<p>
    <b>Nombre del alumno: {{$students->name_student}}</b>
</p>
<br><br>
<p>
    <b>Matricula: {{$students->id_student}}</b>
</p>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

@endsection