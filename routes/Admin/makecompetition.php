<?php

use App\Http\Controllers\Admin\MakeCompetitionController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('makecompetition', MakeCompetitionController::class);  
});

?>