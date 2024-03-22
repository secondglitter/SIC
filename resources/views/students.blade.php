@extends('plantilla')
@section('titulo')
    Estudiante
@endsection
@section('contenido')
<h1>Lista de estudiantes</h1>
@if (session()->has('notificacion'))
    <div style="color: brown">
        {{session('notificacion')}}
    </div>
@endif
<table>
@foreach ($students as $student)
@if($loop->first)
    <tr>
        <th>Matricula del alumno</th>
        <th>Nombre del alumno</th>
        <th>Apellidos</th>
        <th>Cumpleaños</th>
        <th>Comentario</th>
        <th>Acción</th>
    </tr>
@endif

<tr>
    <td>{{$student->id_student}}</td>
    <td>{{$student->name_student}}</td>
    <td>{{$student->lastname_student}}</td>
    <td class="lista-1">{{$student->birthday}}</td>
    <td>{{$student->comment}}</td>
    <td class="lista-2">
        <a  href="{{route('estudiante.show', $student->id)}}"><button class="detalles">Detalles</button></a>
       <br><br> 
        <a  href="{{route('estudiante.edit', $student->id)}}"><button class="editar">Editar</button></a>
        <br><br> 
        <a  href="{{route('imprimir.cardex', $student->id)}}"><button class="editar">PDF</button></a>
    </td>
</tr>


@endforeach
</table>
{{ $students->links()}}
<br><br>
@endsection