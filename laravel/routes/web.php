<?php

use App\Http\Controllers\RealEstateController;
use Illuminate\Support\Facades\Route;


Route::get('/', [RealEstateController::class, 'index'])->name('real-estate.index');
Route::get('/real-estates/{id}', [RealEstateController::class, 'show'])->name('real-estate.show');
Route::delete('/real-estates/{realEstate}', [RealEstateController::class, 'destroy'])->name('real-estate.destroy');
