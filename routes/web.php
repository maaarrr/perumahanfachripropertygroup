<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// ...existing code...

// Ganti route lama '/' dengan controller
Route::get('/', [HomeController::class, 'index']);

// ...existing code...