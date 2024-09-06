<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('signup-personal');
});

Route::get('/company', function () {
    return view('signup-company');
});
