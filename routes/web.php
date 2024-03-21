<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class , 'index'] )-> name('index');

Route::get('/about', [AppController::class , 'about'] )-> name('about');

Route::get('/contact', [AppController::class , 'contact'] )-> name('contact');

// Route::get('/', function () {
//     return view('index');
// });

