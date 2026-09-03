<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get(uri: '/', [SiteController::class, 'index']);