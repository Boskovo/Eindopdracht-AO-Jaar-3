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
use App\Http\Controllers\RoleController;

//------------------------------------------------------------------------------------------

Route::get('/', function () { return redirect()->route('login'); });

Auth::routes();

Route::controller(ShowController::class)->prefix('dashboard')->group(function () {
    Route::get('/', 'dashboard')->name('home');
});

Route::controller(ShowController::class)->prefix('zoeken')->group(function(){
    Route::get('/resultaten', 'search')->name('search');
});

Route::controller(SettingsController::class)->prefix('instellingen')->group(function () {
    Route::get('/', 'show')->name('settings');
    Route::put('/update', 'update')->name('settings.update');
    Route::post('/link/create', 'create_link')->name('settings.create.link');
    Route::get('/link/{id}/edit', 'edit_link')->name('settings.edit.link');
    Route::put('/link/{id}/update', 'update_link')->name('settings.update.link');
    Route::get('/link/{id}/delete', 'destroy_link')->name('settings.destroy.link');
    Route::post('/address/create', 'create_address')->name('settings.create.address');
    Route::get('/address/{id)/edit', 'edit_address')->name('settings.edit.address');
    Route::put('/address/{id}/update', 'update_address')->name('settings.update.address');
    Route::get('/address/{id}/destroy', 'destroy_address')->name('settings.destroy.address');
});

Route::controller(StudentController::class)->prefix('student')->group(function () {
    Route::get('/zoek-stage', 'search_internship')->name('search.internship'); //misschien weghalen / samenvoegen met de zoekfunctie van rick?
    Route::get('/documenten', 'documents')->name('student.documents');
    Route::get('/klassen', 'grades_index')->name('student.grades.index');
    Route::get('/klassen/{id}', 'grades_show')->name('student.grades.show');
    Route::post('file-upload', 'dropzone')->name('dropzone');
});

Route::resource('student', StudentController::class);

Route::controller(ProfileController::class)->prefix('profiel')->group(function () {
    Route::get('/', 'show')->name('profile');
});

Route::controller(AdminController::class)->prefix('admin')->group(function () {
    Route::get('/dashboard', 'index')->name('admin');
    Route::resource('users', UserController::class);
    Route::put('/{id}/destroy', 'destroy')->name('users.destroy');
    Route::resource('roles', RoleController::class);
});

Route::controller(TeacherController::class)->prefix('docenten')->group(function () {
    Route::get('/', 'index')->name('docenten.index');
    Route::get('/documenten/goedkeuren', 'document_verify')->name('teacher.verify');
    Route::get('/klassen','classes')->name('teacher.classes');
});

//Route::resource('docenten', TeacherController::class);

Route::controller(CompanyController::class)->prefix('bedrijven')->group(function () {
    //Route::get('/vacatures', 'vacancies')->name('company.vacancies');
    Route::get('/vacatures/new', 'new_vacancy')->name('company.new_vacancy');
    Route::get('/vacatures/{id}', 'vacancies')->name('company.vacancies');
    Route::post('/vacatures/aanmaken', 'create_vacancy')->name('company.create.vacancie');
});

Route::resource('bedrijven', CompanyController::class);
