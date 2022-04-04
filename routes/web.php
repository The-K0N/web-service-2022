<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('portofolio');
});

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/test', function () {
//     echo 'dari url coba';
// });

// Route::get('/nama', function () {
//     return "Surya Khoirrahman";
// });

// Route::get('/dari-view', function () {
//     return view ('home');
// });

// Route::get('/mahasiswa{nama}', function ($nama) {
//     return "Nama Mahasiswa : $nama";
// });

Route::get('/', function () {
    return view('home');
})->name('utama');

Route::get('/about', function () {
    return view('portofolio');
})->name('tentang-saya');

Route::get('/Profile', [ProfileController::class, 'index']);
