<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('portfolio');
});

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
