<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PkpuController;
use App\Http\Controllers\TulisanController;
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


Route::get('/', [HomeController::class, 'index'])->name('index-home');
Route::get('/diferensiasi', [HomeController::class, 'difrensiasi'])->name('diferensiasi');
Route::get('layanan', [LayananController::class, 'index'])->name('page-layanan');
Route::post('layanan-submit', [LayananController::class, 'store'])->name('store-layanan');
Route::get('tulisan/{slug}', [TulisanController::class, 'show'])->name('detail-tulisan');
Route::get('artikel-hukum', [TulisanController::class, 'index'])->name('list-artikel');
Route::get('dataArtikel', [TulisanController::class, 'dataArtikel'])->name('dataArtikel');
Route::get('kontak-kami', [KontakController::class, 'index'])->name('kontakKami');
Route::get('partner/{slug}', [PartnerController::class, 'index'])->name('partner');
Route::get('pkpu-dan-pailit', [PkpuController::class, 'index'])->name('pkpu');
Route::get('event', [EventController::class, 'index']);

