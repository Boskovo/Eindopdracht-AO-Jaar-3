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
    Route::get('/link/{id}/destroy', 'destroy_link')->name('settings.destroy.link');
    Route::post('/address/create', 'create_address')->name('settings.create.address');
    Route::get('/address/{id)/edit', 'edit_address')->name('settings.edit.address');
    Route::put('/address/{id}/update', 'update_address')->name('settings.update.address');
    Route::get('/address/{id}/destroy', 'destroy_address')->name('settings.destroy.address');
});

Route::controller(StudentController::class)->prefix('student')->group(function () {
    Route::get('/documenten', 'documents')->name('student.documents');
    Route::get('/klassen', 'grades_index')->name('student.grades.index');
    Route::post('/klassen/store', 'grades_store')->name('student.grades.store');
    Route::get('/klassen/{id}', 'grades_show')->name('student.grades.show');
    Route::put('/klassen/{id}/update', 'grades_update')->name('student.grades.update');
    Route::get('/klassen/{id}/destroy', 'grades_destroy')->name('student.grades.destroy');
    Route::put('/klassen/{id}/lid/store', 'grades_member_store')->name('student.grades.member.store');
    Route::get('/klassen/{id}/lid/destroy', 'grades_member_destroy')->name('student.grades.member.destroy');
    Route::post('/file-upload', 'dropzone')->name('dropzone');
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

Route::controller(CompanyController::class)->prefix('bedrijven')->group(function () {
    Route::get('/vacatures', 'vacancy_index')->name('vacancies.index');
    Route::get('/vacatures/aanmaken', 'vacancy_create')->name('company.create.vacancy');
    Route::post('/vacatures/aanmaken/opslaan', 'vacancy_store')->name('company.store.vacancy');
    Route::get('/vacature/{id}', 'vacancy_show')->name('company.vacancy.show');
    Route::put('/{id}/update', 'update')->name('company.update');
    Route::get('/{id}/destroy', 'destroy')->name('bedrijven.destroy');
});

Route::resource('bedrijven', CompanyController::class)->except('destroy', 'update');
