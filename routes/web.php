<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiayaController;
use App\Http\Controllers\KabindaController;
use App\Http\Controllers\MdUserController;
use App\Http\Controllers\MdDriverController;
use App\Http\Controllers\WithdrawController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\MdMerchantController;
use App\Http\Controllers\TotalTopupController;
use App\Http\Controllers\MitraKabupatenController;
use App\Http\Controllers\PromosiController;
use App\Http\Controllers\SaluranController;
use App\Http\Controllers\TransaksiAnterinController;
use App\Http\Controllers\TransaksiBelanjainController;
use App\Http\Controllers\TransaksiKiriminController;

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


// Routing Auth Login & Register
route::get('/login', function() {
    return view('pages.login.index');
});

route::get('/register', function() {
    return view('pages.register.index');
});


                            // ~~ Menu Sidebar ~~ //
    // Master Data
// Kabinda
Route::get('/kabinda', [KabindaController::class, 'index'])->name('kabinda');
Route::get('/kabinda/details-posda', [KabindaController::class, 'DetailPosda'])->name('details-posda');
Route::get('/kabinda/details-relawan', [KabindaController::class, 'DetailRelawan'])->name('details-relawan');
Route::get('/kabinda/details-kabinda', [KabindaController::class, 'DetailKabinda'])->name('details-kabinda');


// Saluran Bantuan
Route::get('/bantuan', [SaluranController::class, 'index'])->name('bantuan');
Route::get('/bantuan/details', [SaluranController::class, 'details'])->name('detail-bantuan');






                            // ~~ Menu Tambah Akun ~~ //
Route::get('/tambah', function(){
    return view('pages.tambah-akun.index');
});