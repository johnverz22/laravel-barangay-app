<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/', function () {
        return view('dashboard'); })->name('dashboard');
        Route::get('/sample-print', [DocumentController::class, 'print'])->name('print');

        Route::get('/setup', [DocumentController::class, 'setup'])->name('setup');
        Route::post('/setup', [DocumentController::class, 'store'])->name('store');
        Route::get('/request', [DocumentController::class, 'request'])->name('request');
        Route::post('/request', [DocumentController::class, 'requestStore'])->name('requestStore');
        Route::get('/report', [DocumentController::class, 'report'])->name('report');
});

require __DIR__.'/auth.php';
