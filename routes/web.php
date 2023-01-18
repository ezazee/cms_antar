<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiayaController;
use App\Http\Controllers\KabindaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MdUserController;
use App\Http\Controllers\MdDriverController;
use App\Http\Controllers\WithdrawController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\MdMerchantController;
use App\Http\Controllers\TotalTopupController;
use App\Http\Controllers\MitraKabupatenController;
use App\Http\Controllers\PenerimaDetailController;
use App\Http\Controllers\PromosiController;
use App\Http\Controllers\SaluranController;
use App\Http\Controllers\TransaksiAnterinController;
use App\Http\Controllers\TransaksiBelanjainController;
use App\Http\Controllers\TransaksiKiriminController;
use App\Http\Controllers\WilayahBindaController;

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


// Home Routing
Route::get('/', function () {
    return view('index');
});


// Routing Profile Admin
Route::get('/profile', function () {
    return view('pages.profile.index');
});


                            // ~~ Menu Sidebar ~~ //
    // MASTER DATA
// Wilayah Binda
Route::get('/wilayah-binda', [WilayahBindaController::class, 'index'])->name('wilayah-binda');
Route::get('/wilayah-binda/details-kabinda', [WilayahBindaController::class, 'DetailKabinda'])->name('details-kabinda');

Route::get('/wilayah-binda/details-posda', [WilayahBindaController::class, 'DetailPosda'])->name('details-posda');
Route::get('/wilayah-binda/details-relawan', [WilayahBindaController::class, 'DetailRelawan'])->name('details-relawan');


// Saluran Bantuan
Route::get('/bantuan', [SaluranController::class, 'index'])->name('bantuan');
Route::get('/bantuan/details', [SaluranController::class, 'details'])->name('detail-bantuan');

// Penerima Bantuan
Route::get('/penerima', [PenerimaDetailController::class, 'index'])->name('penerima');
Route::get('/penerima/details', [PenerimaDetailController::class, 'details'])->name('detail-penerima');


    // END MASTER DATA

    
                            // ~~ Menu Sidebar ~~ //

// Create Akun
Route::get('/tambah', function(){
    return view('pages.tambah-akun.index');
});


// Create Jenis
Route::get('/tambah-jenis', function() {
    return view('pages.tambah-jenis.index');
});

// Create Judul
Route::get('/tambah-judul', function() {
    return view('pages.tambah-judul.index');
});


// Report
Route::get('/report', function () {
    return view('pages.report.index');
});




                            // ~~ Menu Auth ~~ //
// Routing Auth Login & Register
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login/auth', [LoginController::class, 'auth'])->name('auth');


route::get('/register', function() {
    return view('pages.register.index');
});
