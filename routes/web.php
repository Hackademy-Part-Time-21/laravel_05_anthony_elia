<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;



Route::get('/', [PublicController::class, 'welcome'])->name('welcome');
Route::get('/contact-us', [PublicController::class, 'contact_us'])->name('contact_us');
Route::post('/contact-us/submit', [PublicController::class, 'contact_us_submit'])->name('contact_us_submit');
