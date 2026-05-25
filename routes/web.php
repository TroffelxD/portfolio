<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
})->name('home');

Route::get('/projects', function () {
    return view('projects');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('home');


