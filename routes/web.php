<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [StudentController::class, 'index'])->name('student.index');
Route::group(['prefix' => 'student'], function () {
    Route::get('/create', [StudentController::class, 'create'])->name('student.create');
    Route::post('/store', [StudentController::class, 'store'])->name('student.store');
    Route::get('/{student_id}', [StudentController::class, 'edit'])->name('student.edit');
    Route::put('/{student_id}', [StudentController::class, 'update'])->name('student.update');
    Route::get('/delete/{student_id}', [StudentController::class, 'delete'])->name('student.delete');
});

