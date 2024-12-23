<?php

use App\Http\Controllers\Admin\MakeStageController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('makestage', MakeStageController::class); 
    Route::get('new-makestage/{id}', [MakeStageController::class, 'newMakeStage'])->name("makestage.new");
    Route::post('new-makestage/{id}', [MakeStageController::class, 'storeMakeStage'])->name("makestage.store2");
});
?>