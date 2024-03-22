<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\StudentRequest;
use Symfony\Component\HttpFoundation\RedirectResponse;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$students=Student::all();
        $students=Student::paginate(10);
        return view('students', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name_student' => 'required|max:255',
            'lastname_student' => 'required|max:255',
            'id_student' => 'required|max:5',
            'birthday' => 'required|max:10',
            'comment' => 'required|max:255'
        ]);

        $validateData = Student::create($validateData);

        return redirect()->route('estudiantes')->with('success', 'Estudiante registrado con éxito');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $students = Student::find($id);
        return view('show-student', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $students = Student::find($id);
        return view('edit-student', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, $id):RedirectResponse
    {
        $students = Student::find($id);
        $students->update($request->all());

        return redirect()->route('estudiante.index')->with('notificacion',
        'Estudiante modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
