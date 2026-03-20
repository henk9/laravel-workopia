<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/jobs/{id}/save', [JobController::class, 'save'])->name('jobs.save');
Route::resource('jobs', JobController::class);
