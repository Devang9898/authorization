<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
/////////////////////////


use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentTableController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BookController;



use App\Http\Controllers\UserController;
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/dashboard', [DashboardController::class,'__invoke'])->middleware('auth');

Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/', [AuthController::class, 'show'])->name('login');
Route::get('/books', [BookController::class, 'index']);
Route::post('/members/{id}/attach-role', [MemberController::class, 'attachRole']);
Route::post('/members/{id}/detach-role', [MemberController::class, 'detachRole']);
Route::post('/members/{id}/sync-roles', [MemberController::class, 'syncRoles');




