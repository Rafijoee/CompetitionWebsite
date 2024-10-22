<?php

use App\Http\Controllers\Admin\CheckStageController;
use App\Http\Controllers\Admin\DataTimController;
use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('checkstage', CheckStageController::class);
    Route::get('checkstages-ppl', [CheckStageController::class, 'ppl']);
    Route::get('checkstages-ux', [CheckStageController::class, 'ux']);
    Route::get('checkstages-kti', [CheckStageController::class, 'kti']);
    Route::get('checkstages-busplan', [CheckStageController::class, 'busplan']);
});

Route::get('/download/{filename}', [FileController::class, 'download'])->name('download');


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/tims', [DataTimController::class, 'index'])->name('teams.index');
    Route::get('/tims/{category_name}', [DataTimController::class, 'category'])->name('category.teams');
    Route::get('/tims/{category_name}/{team_name}/edit', [DataTimController::class, 'editTeamStage'])->name('team.editStage');
    Route::post('/tims/{category_name}/{team_name}/update', [DataTimController::class, 'updateTeamStage'])->name('team.updateStage');

});