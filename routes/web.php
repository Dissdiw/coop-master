<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\StudentController;

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

Route::get('/signup', [StudentController::class,'signup'])->name('student.signup');

Route::post('/register', [StudentController::class,'register'])->name('student.register');

Route::get('/signin', [StudentController::class,'signin'])->name('student.signin');