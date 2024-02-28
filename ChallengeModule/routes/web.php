<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChallengeController;
use Illuminate\Support\Facades\Route;

// Home route
Route::get('/', [HomeController::class, 'index'])
    ->name('home.index');

// Challenge routes
Route::get('/challenges', [ChallengeController::class, 'index_challenge'])
    ->name('challenge.index_challenge');

Route::get('/challenges/{id}', [ChallengeController::class, 'show_challenge'])
    ->name('challenge.show_challenge');

Route::get('/create/challenge', [ChallengeController::class, 'create_challenge'])
    ->name('challenge.create_challenge');

Route::post('/save/challenge', [ChallengeController::class, 'save_challenge'])
    ->name('challenge.save_challenge');

Route::delete('/challenge/{id}', [ChallengeController::class, 'delete_challenge'])
    ->name('challenge.delete_challenge');
