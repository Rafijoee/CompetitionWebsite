<?php
use App\Http\Controllers\Users\PaymentController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->group(function(){
    Route::resource('payment', PaymentController::class);
});