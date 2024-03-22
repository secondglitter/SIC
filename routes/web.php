<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Livewire\Examples\Examples1;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/estudiante', StudentController::class);
});

Route::get('/sinpermiso', function () {
    return view('sinpermiso');
})->name('sinpermiso');

Route::get('/formulario', function () {
    return view('formulario');
})->middleware('auth')->name('formulario');


Route::get('/admin', function () {
    return view('admin');
})->middleware('auth');

Route::middleware('auth')->post('/formulario', [StudentController::class, 'store'])->name('formulario.store'); //Ruta protegida de metodo post de registro

Route::middleware('auth')->get('/estudiantes', [StudentController::class, 'index'])->name('estudiantes'); // Ruta protegida de lista de estudiantes

Route::middleware('auth')->get('/subject', [SubjectController::class, 'index'])->name('subject');

Route::get('reportes/{estudiantes}',[ReportsController::class, 'print_cardex'])->name('imprimir.cardex');

Route::get('livewire',Examples1::class);

// Route::middleware('auth')->resource('estudiantes', StudentController::class);

require __DIR__.'/auth.php';
