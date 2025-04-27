<?php

use App\Http\Controllers\Admin\SubjectsController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/subjects', [SubjectsController::class, 'index'])->name('admin.subjects.index');
    Route::get('/subjects/{id}', [SubjectsController::class, 'detail'])->name('admin.subjects.detail');
    Route::get('/subjects/{id}/edit', [SubjectsController::class, 'edit'])->name('admin.subjects.edit');
    Route::post('/subjects/{id}', [SubjectsController::class, 'update'])->name('admin.subjects.update');
});