<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;

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
Route::get('/', function(){ return redirect()->route('login'); });

Auth::routes();

Route::get('/home', [ShowController::class, 'dashboard'])->name('home');

Route::get('/instellingen', [SettingsController::class, 'show'])->name('settings');
Route::put('/instellingen/update', [SettingsController::class, 'update'])->name('settings.update');
Route::post('/instellingen/create/link', [SettingsController::class, 'create_link'])->name('settings.create.link');

Route::get('/profiel', [ProfileController::class, 'show'])->name('profile');

Route::resource('studenten', StudentController::class);
Route::resource('docenten', TeacherController::class);
Route::resource('bedrijven', CompanyController::class);

