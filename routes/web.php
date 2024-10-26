<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\EducationController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/review/post', [ReviewController::class,'index'])->name('review');
Route::post('/message/send', [MessageController::class,  'index'])->name('message');
Route::get('/resume', [HomeController::class, 'resume'])->name('resume');
Route::get('/resume/download', [HomeController::class, 'resumeDownload'])->name('resume.download');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //Project Module
    Route::get('/project/add', [ProjectController::class, 'index'])->name('project.add');
    Route::post('/project/add', [ProjectController::class, 'add'])->name('project.new');
    Route::get('/project/manage', [ProjectController::class, 'manage'])->name('project.manage');
    Route::get('/project/edit/{id}', [ProjectController::class, 'edit'])->name('project.edit');
    Route::post('/project/update', [ProjectController::class, 'update'])->name('project.update');
    Route::post('/project/remove', [ProjectController::class, 'remove'])->name('project.remove');

    //Client Module
    Route::get('client/add', [ClientController::class, 'index'])->name('client.add');
    Route::post('client/add', [ClientController::class, 'add'])->name('client.new');
    Route::get('client/manage', [ClientController::class, 'manage'])->name('client.manage');
    Route::get('client/edit/{id}', [ClientController::class, 'edit'])->name('client.edit');
    Route::post('client/update', [ClientController::class, 'update'])->name('client.update');
    Route::post('client/remove', [ClientController::class, 'remove'])->name('client.remove');

//    Review and Message Module
    Route::get('review/manage', [ReviewController::class, 'manage'])->name('review.manage');
    Route::get('review/status/{id}', [ReviewController::class, 'status'])->name('review.status');
    Route::post('review/bulk-remove', [ReviewController::class, 'bulkRemove'])->name('review.bulkDelete');
    Route::post('review/remove', [ReviewController::class, 'remove'])->name('review.remove');

    Route::get('messages/manage', [MessageController::class, 'manage'])->name('messages.manage');
    Route::post('messages/remove', [MessageController::class, 'remove'])->name('messages.remove');
    Route::post('messages/bulk-remove', [MessageController::class, 'bulkRemove'])->name('messages.bulkDelete');
    Route::get('messages/status/{id}', [MessageController::class, 'status'])->name('messages.status');

    //Training Module
    Route::get('certification/add', [TrainingController::class, 'index'])->name('certification.add');
    Route::post('certification/add', [TrainingController::class, 'add'])->name('certification.new');
    Route::get('certification/manage', [TrainingController::class, 'manage'])->name('certification.manage');
    Route::get('certification/edit/{id}', [TrainingController::class, 'edit'])->name('certification.edit');
    Route::post('certification/update', [TrainingController::class, 'update'])->name('certification.update');
    Route::post('certification/remove', [TrainingController::class, 'remove'])->name('certification.remove');

    //Skill Module
    Route::get('skill/add', [SkillController::class, 'index'])->name('skill.add');
    Route::post('skill/add', [SkillController::class, 'add'])->name('skill.new');
    Route::get('skill/manage', [SkillController::class, 'manage'])->name('skill.manage');
    Route::get('skill/edit/{id}', [SkillController::class, 'edit'])->name('skill.edit');
    Route::post('skill/update', [SkillController::class, 'update'])->name('skill.update');
    Route::post('skill/remove', [SkillController::class, 'remove'])->name('skill.remove');

    //education Module
    Route::get('education/add', [EducationController::class, 'index'])->name('education.add');
    Route::post('education/add', [EducationController::class, 'add'])->name('education.new');
    Route::get('education/manage', [EducationController::class, 'manage'])->name('education.manage');
    Route::get('education/edit/{id}', [EducationController::class, 'edit'])->name('education.edit');
    Route::post('education/update', [EducationController::class, 'update'])->name('education.update');
    Route::post('education/remove', [EducationController::class, 'remove'])->name('education.remove');
});
