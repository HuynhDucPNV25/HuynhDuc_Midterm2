<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/blog', function () {
    return view('pages.blog');
});
Route::get('/choose', function () {
    return view('pages.choose');
});
Route::get('/help', function () {
    return view('pages.help');
});
Route::get('/popularProd', function () {
    return view('pages.popularProd');
});
Route::get('/startProd', function () {
    return view('pages.startProd');
});
Route::get('/testimonial', function () {
    return view('pages.testimonial');
});
