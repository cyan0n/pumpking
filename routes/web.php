<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\SubmissionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    //Route::resource('/', SubmissionController::class);
    Route::get('/', [VoteController::class, 'create'])->name('vote.create');
    Route::post('/', [VoteController::class, 'store'])->name('vote.store');
    Route::get('/risultati', [VoteController::class, 'index'])->name('vote.index');

    Route::get('/test', [VoteController::class, 'test']);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
