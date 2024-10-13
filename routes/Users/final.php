<?php

use App\Http\Controllers\Users\FinalController;
use App\Http\Controllers\Users\Submissions1Controller;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'checkstage', 'payment3'])->group(function () {
    Route::resource('final-submission', FinalController::class);
});