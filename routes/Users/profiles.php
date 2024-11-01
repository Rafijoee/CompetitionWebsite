<?php

use App\Http\Controllers\Users\FinalController;
use App\Http\Controllers\Users\ProfilesController;
use App\Http\Controllers\Users\Submission2Controller;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::resource('profile', ProfilesController::class);
});


