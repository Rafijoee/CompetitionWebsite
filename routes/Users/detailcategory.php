<?php

use Illuminate\Support\Facades\Route;

Route::get('/detailsppl', function () {
    return view('detail_lomba.ppl');
});
Route::get('/detailsscience', function () {
    return view('detail_lomba.science');
});
Route::get('/detailsux', function () {
    return view('detail_lomba.ux');
});
Route::get('/detailsbusplan', function () {
    return view('detail_lomba.busplan');
});