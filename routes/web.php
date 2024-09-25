<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
//     // dd(auth::check());
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::post('/logout',  [LoginController::class, 'logout'])->name('logout');


Route::resource('/tasks', App\Http\Controllers\TaskController::class, [
    'except' => ['update', 'edit', 'show']

]);
// Route::delete('/tasks/{id}', [PostController::class, 'destroy'])->middleware('auth');

