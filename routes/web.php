<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('blog', function () {
    return view('blog');
})->name('blog');

Route::get('post', function () {
    return view('post');
})->name('post');