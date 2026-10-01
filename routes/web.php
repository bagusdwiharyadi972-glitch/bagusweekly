<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('home');
});

Route::get('/home', function () {
    return view('home');
})->name('home', [
    "title" => "home"
])->name('home');

Route::get('/layanan', function () {
    return view('layanan');
})->name('layanan');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/profile', function () {
    return view('profile', [
        "nama" => "Bagus Dwi Haryadi",
        "nim" => "13242520057",
        "prodi" => "Teknologi Informasi"
    ]);
})->name('profile');