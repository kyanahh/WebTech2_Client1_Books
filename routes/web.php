<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Models\Task;

Route::get('/', [TaskController::class, 'landingpage'])->name('landing');
Route::get('loginpage', [TaskController::class, 'loginpage'])->name('mylogin');
Route::post('loginpage', [TaskController::class, 'login'])->name('signin');
Route::get('signup', [TaskController::class, 'signup'])->name('register');
Route::post('signup', [TaskController::class, 'createuser'])->name('user');
Route::get('homepage', [TaskController::class, 'homepage'])->name('home');
Route::get('index', [TaskController::class, 'index'])->name('records');
Route::post('index', [TaskController::class, 'store'])->name('addtask');
Route::delete('/{task}', [TaskController::class, 'destroy'])->name('delete');
Route::get('/{task}/edit', [TaskController::class, 'edit'])->name('edit2');
Route::put('/{task}', [TaskController::class, 'update'])->name('update2');

Route::post('login', [TaskController::class, 'logout'])->name('signout');

