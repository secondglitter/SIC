<?php

namespace App\Livewire\Examples;

use Livewire\Component;
use App\Models\Student;

class Examples1 extends Component
{
    public $title= 'Bienvenidos';
    public $idstudent = 0;
    public $student;
    public $students = null;
    public function render()
    {
        return view('livewire.examples.examples1')->layout('layouts.ejemplolayout');
    }

    public function showStudent(){
       $this->student = Student::find($this->idstudent);
    }
    public function Students(){
        $this->students = Student::all();
    }
}
