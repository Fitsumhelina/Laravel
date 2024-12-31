<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

$router -> get('/contact', function () {
    return view('contact');
});
Route::get('/greet/{name}', function ($name) {
    return view('hello' , ['name' => $name]);
}) -> where ("name","fitse");
