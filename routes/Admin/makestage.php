<?php

use App\Http\Controllers\Admin\MakeStageController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('makestage', MakeStageController::class); 
});

?>