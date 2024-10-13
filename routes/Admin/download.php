<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Download1Controller;
use App\Http\Controllers\Admin\Download2Controller;
use App\Http\Controllers\Admin\DownloadFinalController;
use App\Http\Controllers\Admin\DownloadBukti2Controller;
use App\Http\Controllers\Admin\DownloadBuktiFinalController;

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('download-path1', Download1Controller::class);
    Route::resource('download-path2', Download2Controller::class);
    Route::resource('download-path3', DownloadFinalController::class);
    Route::resource('download-pembayaran-2' , DownloadBukti2Controller::class);
    Route::resource('download-pembayaran-final' , DownloadBuktiFinalController::class);
    Route::get('download', [Download1Controller::class, 'index2']);
    Route::get('download-pembayaran', [Download1Controller::class, 'index3']);
});
