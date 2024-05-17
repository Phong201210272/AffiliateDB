<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Middleware\AuthenticateMiddleware;
use App\Http\Middleware\LoginMiddleware;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index')->middleware(AuthenticateMiddleware::class);
Route::post('admin', [AuthController::class, 'index'])->name('auth.admin');
Route::get('login', [AuthController::class, 'login'])->name('auth.login')->middleware(LoginMiddleware::class);
Route::get('dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index')->middleware(AuthenticateMiddleware::class);
Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('user/index', [UserController::class, 'index'])->name('user.index')->middleware(AuthenticateMiddleware::class);
