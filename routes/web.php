<?php //file php

use App\Http\Controllers\ItemController; //menggunakan ItemController agar bisa dipakai dalam route
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route; //memuat class Route untuk mendefinisikan rute aplikasi

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { //mendaftarkan route GET / (halaman utama)
    return view('welcome'); //menampilkan tampilan welcome.blade.php
});

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/world', function () {
    return 'World';
});

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'NIM: 2341760072, Nama: Niriza Lailaumi Hidayat';
});

Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' .$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID '.$id;
});

Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' .$name;
});
Route::resource('items', ItemController::class); //mendaftarkan semua route CRUD (index, create, store, show, edit, update, destroy) untuk ItemController, menghubungkan endpoint /items dengan metode yang ada di ItemController