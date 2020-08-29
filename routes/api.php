<?php

use App\Http\Controllers\Api\StrategicController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('sp')->group(function () {
    Route::get('/', [StrategicController::class, 'index'])->name('ss.all');
    Route::get('/{strategicTarget}', [StrategicController::class, 'show'])->name('ss.show');
});
