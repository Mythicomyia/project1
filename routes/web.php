<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nama', function () {
    return "Nama saya adalah Fitrahul Juma Sawika";
});

Route::get('/nim', function () {
    return "NIM saya adalah 2155201073";
});

Route::get('/{umur}', function ($umur) {
    // Redirect ke URL dengan format yang diminta
    return redirect("/$umur/umur-$umur-tahun");
});

Route::get('/{umur}/umur-{age}-tahun', function ($umur, $age) {
    return "Selamat datang, Anda berusia $age tahun!";
});
