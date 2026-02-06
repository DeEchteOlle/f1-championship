<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teams', function () {
    return view('teams');
});

Route::get('/drivers', function () {
    return view('drivers');
});

Route::get('/champions', function () {
    return view('champions');
});

Route::get('/seo', function () {
    return view('seo');
});

