<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello Laravel dari nim 707082400142';
});

Route::get('/', function () {
    return view ('pages.beranda');
});

Route::get('/profile', function () {
    return view ('pages.profile',[
        'Nama' => "shasha",
        'NIM' => "16291629",
        'Kelas' => "123",
        'Status' => "aktif"
    
    ]);
});

