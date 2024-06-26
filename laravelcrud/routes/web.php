<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Students
Route::get('students', [StudentController::class, 'index'])->name('student.all');
Route::get('add_students', [StudentController::class, 'addstudent'])->name('student.add');
Route::post('add_students', [StudentController::class, 'store'])->name('student.store');
Route::get('edit_students/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::post('update_students/{id}', [StudentController::class, 'update'])->name('student.update');
Route::delete('delete_students/{id}', [StudentController::class, 'delete'])->name('student.delete');
