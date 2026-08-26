<?php

use Illuminate\Support\Facades\Route;

// Klik Home akan menampilkan index.php
Route::get('/', function () {
    return view('index');
});

// Klik Work akan menampilkan work.php
Route::get('/work', function () {
    return view('work');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});