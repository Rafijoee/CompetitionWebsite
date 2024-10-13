<?php

use App\Http\Controllers\Users\Submissions1Controller;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'checkstage'])->group(function () {
    Route::resource('submission1', Submissions1Controller::class);
});
