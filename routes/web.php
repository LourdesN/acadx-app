<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('students', App\Http\Controllers\StudentController::class);
Route::resource('courses', App\Http\Controllers\CourseController::class);
Route::resource('levels', App\Http\Controllers\LevelController::class);
Route::resource('departments', App\Http\Controllers\DepartmentController::class);
Route::resource('schools', App\Http\Controllers\SchoolController::class);
Route::resource('employees', App\Http\Controllers\EmployeeController::class);
Route::resource('fees', App\Http\Controllers\FeeController::class);