<?php //file php

use App\Http\Controllers\ItemController; //menggunakan ItemController agar bisa dipakai dalam route
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

Route::resource('items', ItemController::class); //mendaftarkan semua route CRUD (index, create, store, show, edit, update, destroy) untuk ItemController, menghubungkan endpoint /items dengan metode yang ada di ItemController