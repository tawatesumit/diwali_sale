<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

// routes/web.php
Route::post('/orders', [OrderController::class, 'createOrder']);

