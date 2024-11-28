<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;



// Public routes
Route::get('/', function () {
    return view('welcome');
});
// Authentication routes
Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);
});
// Protected routes
Route::middleware('auth')->group(function () {
    // Employee management
    Route::resource('employees', EmployeeController::class);
    
    // Leave management
    Route::resource('leave-records', LeaveRecordController::class);
    
    // Sick reports
    Route::resource('sick-reports', SickReportController::class);
    
    // Role management (admin only)
    Route::middleware('role:beheerder')->group(function () {
        Route::resource('roles', RoleController::class);
        Route::resource('users', UserController::class);
    });
});