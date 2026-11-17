<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SapaController;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return 'Selamat pagi dunia, 707082400142';
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

// menampilkan data diri Anda
Route::get('/about', function () {
    return view('pages.about', [
        'nama'=> 'Nesya Syafira Anandita',
        'kelas'=> 'D4SM-48-03',
        'nim' => '707082400142'

    ]);
});

Route::view('/contact', 'pages.contact');



Route::get('/latihan', function () {
    $matakuliah = [
        'Pemrograman Web', 
        'Basis Data', 
        'UI/UX'];
    return view('pages.latihan', ['matakuliah' => $matakuliah
    ]);
});


Route::get('/sapa', [SapaController::class, 'index']);


// Satu controller dapat memiliki beberapa method
Route::get('/product', [ProductController::class, 'index']); //untuk menampilkan data 
Route::get('/product/addProduct', [ProductController::class, 'addProduct']);
Route::post('/product', [ProductController::class, 'store']);




