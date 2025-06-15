<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
})->name('layout');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/layout', function () {
    return view('layout');
})->name('Home');

