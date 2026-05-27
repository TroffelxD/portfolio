<?php

use App\Http\Controllers\MainPage;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainPage::class, 'images']);

Route::get('/projects', function () {
    return view('projects');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('home');

