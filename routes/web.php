<?php

use App\Http\Controllers\NbaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nba/score', [NbaController::class, 'index']);

