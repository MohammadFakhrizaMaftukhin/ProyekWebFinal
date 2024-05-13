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

Route::get('/pencarian', function () {
    return view('tema.pencarian');
});

Route::get('/kategorimakanan', function () {
    return view('tema.kategorimakanan');
});

Route::get('/kategoriminuman', function () {
    return view('tema.kategoriminuman');
});

Route::get('/kategoritambahan', function () {
    return view('tema.kategoritambahan');
});

Route::get('/order', function () {
    return view('tema.order');
});