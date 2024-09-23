<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
//     // dd(auth::check());
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('tasks', App\Http\Controllers\TaskController::class, [
    'except' => ['update', 'edit', 'show']

]);
