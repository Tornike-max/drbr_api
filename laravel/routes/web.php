<?php

use App\Http\Controllers\RealEstateController;
use Illuminate\Support\Facades\Route;


Route::get('/', [RealEstateController::class, 'index'])->name('real-estate.index');
