<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', function(){
    return view('layout');
});

Route::resource('/students',StudentController::class);

Route::get('/students/{id}', [StudentController::class, 'show']);

Route::get('/students/{id}', [StudentController::class, 'edit']);