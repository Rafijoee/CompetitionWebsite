<?php

use App\Http\Controllers\Users\SubmissionsController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'checkstage'])->group(function () {
    Route::resource('submission1', SubmissionsController::class);
});
