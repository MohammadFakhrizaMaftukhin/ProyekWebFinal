<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('tema.home');
});

Route::get('/makanan', function () {
    return view('tema.makanan');
});

Route::get('/kategori', function () {
    return view('tema.kategori');
});

