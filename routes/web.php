<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

Route::get('/', function(){
    return view('layout');
});

Route::resource('/students',StudentController::class);

Route::get('/students/{id}', [StudentController::class, 'show']);

Route::get('/students/{id}', [StudentController::class, 'edit']);

Route::resource('/teachers',TeacherController::class);