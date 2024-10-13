<?php

use App\Http\Controllers\Users\Submission2Controller;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'payment2', 'checkstage'])->group(function () {
    Route::resource('submissions2', Submission2Controller::class);
});