<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\SubmissionsController;

Route::middleware(['auth'])->group(function () {
    Route::resource('/submissions', SubmissionsController::class);
});