<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('formulario');
    }
    public function store(){
        return "Formulario Procesado";
    }
}