<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::getResource('posts', PostController::class);
