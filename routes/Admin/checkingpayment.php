<?php

use App\Http\Controllers\Admin\CheckPayment2Controller;
use App\Http\Controllers\Admin\CheckPayment3Controller;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('checkpayment2', CheckPayment2Controller::class);
    Route::resource('checkpayment3', CheckPayment3Controller::class);
});