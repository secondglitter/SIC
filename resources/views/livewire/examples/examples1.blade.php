

<div>
    <h1 class="title">Mi primera chamba con Livewire</h1>
    <br><br>
    <div class="tablas">
    <h1>{{ $title }}</h1>
    <br>
    <h3>Id del estudiante a buscar:</h3>
    <input wire:model='idstudent' type="text">
    <button wire:click='showStudent'>Buscar Estudiante</button>
    <p> Nombre del estudiante: <b>{{ $student?->name_student }}</b></p>
    <br>
    <button wire:click='Students'>Mostrar Estudiantes</button>
    @if($students)
    <table>
        @foreach ($students as $stu)
        @if($loop->first)
            <tr>
                <th>Matricula del alumno</th>
                <th>Nombre del alumno</th>
                <th>Apellidos</th>
                <th>Cumpleaños</th>
                <th>Comentario</th>
                
            </tr>
        @endif
        
        <tr>
            <td>{{$stu->id_student}}</td>
            <td>{{$stu->name_student}}</td>
            <td>{{$stu->lastname_student}}</td>
            <td class="lista-1">{{$stu->birthday}}</td>
            <td>{{$stu->comment}}</td>
        </tr>
        
        
        @endforeach
        </table>
        @endif
    </div>
</div>
