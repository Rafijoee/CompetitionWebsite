<?php

use App\Http\Controllers\Admin\CheckStageController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Users\SubmissionsController;
use App\Http\Controllers\Users\ProfilesController;
use App\Http\Controllers\Sub1Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/rulebook/{name}', [Controller::class, 'download'])->name('download');
Route::get('/proposal/{filename}', [Controller::class, 'download2'])->name('proposal');
Route::get('/proposal2/{filename}', [Controller::class, 'ktisub1'])->name('ktisub1');

// Dashboard - mada
Route::get('/dashboard', [ProfilesController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/teamdata', function () { // #2 Team data
    return view('dashboard.team'); // 
})->middleware(['auth', 'verified']);
Route::get('/checkpayment', function () { 
    return view('dashboard.checkpayment');
})->middleware(['auth', 'verified']);

Route::get('/dashboard2', function () {
    return view('dashboard'); // awalnya dashboard aja
})->middleware(['auth', 'verified']);


Route::get('/search', [CheckStageController::class, 'search']);


// Route::post('/submissions1/store', [Sub1Controller::class,'store']);




require __DIR__ . '/Users/profiles.php';
require __DIR__ . '/Users/payment.php';
require __DIR__ . '/Users/submissions.php';
require __DIR__ . '/Users/detailcategory.php';
require __DIR__ . '/Admin/checkingstage.php';
require __DIR__ . '/Admin/checkingpayment.php';
require __DIR__ . '/Admin/download.php';
require __DIR__ . '/Admin/makecompetition.php';
require __DIR__ . '/Admin/makestage.php';
require __DIR__ . '/Users/faq.php';
require __DIR__ . '/auth.php';
