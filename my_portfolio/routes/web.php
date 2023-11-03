<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ClientController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('project/Details/{id}', [HomeController::class, 'details'])->name('project.details');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //Project Module
    Route::get('project/add', [ProjectController::class, 'index'])->name('project.add');
    Route::post('project/add', [ProjectController::class, 'add'])->name('project.new');
    Route::get('project/manage', [ProjectController::class, 'manage'])->name('project.manage');
    Route::get('project/edit/{id}', [ProjectController::class, 'edit'])->name('project.edit');
    Route::post('project/update', [ProjectController::class, 'update'])->name('project.update');
    Route::post('project/remove', [ProjectController::class, 'remove'])->name('project.remove');

    //Client Module
    Route::get('client/add', [ClientController::class, 'index'])->name('client.add');
    Route::post('client/add', [ClientController::class, 'add'])->name('client.new');
    Route::get('client/manage', [ClientController::class, 'manage'])->name('client.manage');
    Route::get('client/edit/{id}', [ClientController::class, 'edit'])->name('client.edit');
    Route::post('client/update', [ClientController::class, 'update'])->name('client.update');
    Route::post('client/remove', [ClientController::class, 'remove'])->name('client.remove');
});
