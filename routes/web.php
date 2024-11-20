<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\UserHomeController;
use App\Http\Controllers\UserAboutController;
use App\Http\Controllers\UserSiswaController;
use App\Http\Controllers\NilaiSiswaController;
use App\Http\Controllers\UserPegawaiController;
use App\Http\Controllers\UserPendaftaranController;
use App\Http\Controllers\AdminPendaftaranController;

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

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('home', HomeController::class);
    Route::resource('siswa', SiswaController::class);
    Route::resource('pegawai', PegawaiController::class);
    Route::resource('about', AboutController::class);
    Route::resource('pendaftaran', AdminPendaftaranController::class);
    Route::resource('nilai', NilaiSiswaController::class);
    Route::get('nilai/create/{siswa_id}', [NilaiSiswaController::class, 'create'])->name('nilai.create');
});

Route::get('/', [UserHomeController::class, 'index'])->name('user.home');
// Route::get('/user/home', [HomeController::class, 'userHome'])->name('user.home');
Route::get('about', [UserAboutController::class, 'index'])->name('user.about');
Route::get('/user/gallery', [HomeController::class, 'gallery'])->name('user.gallery');
Route::get('siswa', [UserSiswaController::class, 'index'])->name('user.siswa');
Route::get('siswa/{id}/nilai', [UserSiswaController::class, 'showNilai'])->name('user.siswa.nilai');
Route::get('pegawai', [UserPegawaiController::class, 'index'])->name('user.pegawai');
Route::get('pendaftaran', [UserPendaftaranController::class, 'create'])->name('user.pendaftaran.create');
Route::post('pendaftaran', [UserPendaftaranController::class, 'store'])->name('user.pendaftaran.store');
