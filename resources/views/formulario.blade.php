@extends('plantilla')
@section('titulo')
    Agregar estudiante
@endsection
@section('contenido')
    <h1> Registro de alumno</h1>
    <form action="{{url(route('estudiante.store'))}}" method="POST">
        @csrf
        <button class="boton" type="submit">Registrar</button>
        <br><br>
        <input type="text" name="name_student" placeholder="Nombre" value="{{ old('name_student') }}">
        @error('name_student')
            <div style="color:red">{{ $message }}</div>
        @enderror
        <br><br>
        <input type="text" name="lastname_student" placeholder="Apellidos" value="{{ old('lastname_student') }}">
        @error('lastname_student')
            <div style="color:red">{{ $message }}</div>
        @enderror
        <br><br>
        <input type="number" name="id_student" placeholder="Matricula" value="{{ old('id_student') }}">
        @error('id_student')
            <div style="color:red">{{ $message }}</div>
        @enderror
        <br><br>
        <h5>Cumpleaños:</h5>
        <input type="date" name="birthday" value="{{ old('birthday') }}">
        @error('birthday')
            <div style="color:red">{{ $message }}</div>
        @enderror
        <br><br>
        <input type="text" name="comment" placeholder="Comentraio" value="{{ old('comment') }}">
        @error('comment')
            <div style="color:red">{{ $message }}</div>
        @enderror
        <br><br>
    </form>
    <br><br><br><br><br><br>
@endsection
