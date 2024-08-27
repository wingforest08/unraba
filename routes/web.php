<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});
Route::get('/portofolio', function () {
    return view('portofolio', ['title' => 'Portofolio Page']);
});
Route::get('/product', function () {
    return view('product', ['title' => 'Product Page']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
