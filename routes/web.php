<!-- Tempat atur rute web atau halaman -->

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about',['nama' => 'Adam Teguh']);
});

Route::get('/services', function () {
    return view('services');
});