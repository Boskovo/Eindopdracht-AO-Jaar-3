<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CompanyController;

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
Route::resource('studenten', StudentController::class);
Route::resource('docenten', TeacherController::class);
Route::resource('bedrijven', CompanyController::class);

Route::get('/', [Controller::class, 'index'])->name('index');
