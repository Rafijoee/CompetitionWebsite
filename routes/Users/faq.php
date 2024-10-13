<?php

use App\Http\Controllers\FaqControllers;
use App\Http\Controllers\Users\FaqControllers as UsersFaqControllers;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'faq'], function () {
    Route::resource('/', UsersFaqControllers::class);
});