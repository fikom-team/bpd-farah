<?php

use App\Http\Controllers\Api\StrategicController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('sp', [StrategicController::class, 'index'])->name('ss.all');
