<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\StudentsController;

// Ruta para obtener la información del usuario autenticado
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Rutas para los controladores CourseController y StudentsController
Route::resource('course', CourseController::class);
Route::resource('students', StudentsController::class);
