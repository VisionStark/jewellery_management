<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('frontend.index');
});
Route::get('/about', function () {
    return view('frontend.about');
});