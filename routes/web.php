<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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
Route::put('/instellingen/update/link/{id)', [SettingsController::class, 'update_link'])->name('settings.update.link');

Route::post('/instellingen/create/address', [SettingsController::class, 'create_address'])->name('settings.create.address');

Route::get('/profiel', [ProfileController::class, 'show'])->name('profile');

Route::resource('studenten', StudentController::class);
Route::get('/zoek-stage', [StudentController::class, 'search_internship'])->name('search.internship');
Route::get('/documenten-stage', [StudentController::class, 'documents'])->name('student.documents');

Route::get('/admin-dashboard', [AdminController::class, 'index'])->name('admin');

//Route::resource('docenten', TeacherController::class);
Route::get('/docenten', [TeacherController::class, 'index'])->name('docenten.index');
Route::get('/docenten/documenten/goedkeuren', [TeacherController::class, 'document_verify'])->name('teacher.verify');
Route::get('/docenten/klassen', [TeacherController::class, 'classes'])->name('teacher.classes');

Route::get('/vacatures', [CompanyController::class, 'vacancies'])->name('company.vacancies');

Route::resource('bedrijven', CompanyController::class);

Route::group(['middleware' => ['auth']], function() {
    Route::resource('users', UserController::class);
});
