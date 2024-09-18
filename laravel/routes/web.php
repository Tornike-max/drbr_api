<?php

use App\Http\Controllers\RealEstateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/real-estates', [RealEstateController::class, 'index'])->name('real-estate.index');
