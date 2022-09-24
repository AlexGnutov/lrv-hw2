<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todo', [\App\Http\Controllers\ToDoController::class, 'index'])->name('todo-index');

Route::get('/todo/create', [\App\Http\Controllers\ToDoController::class, 'create'])->name('todo-form');
Route::post('/todo/create', [\App\Http\Controllers\ToDoController::class, 'store']);

Route::get('/todo/{id}', [\App\Http\Controllers\ToDoController::class, 'show' ]);
Route::get('/todo/edit/{id}', [\App\Http\Controllers\ToDoController::class, 'edit']);
Route::post('/todo/update/{id}', [\App\Http\Controllers\ToDoController::class, 'update']);

Route::get('/todo/delete/{id}', [\App\Http\Controllers\ToDoController::class, 'destroy']);
