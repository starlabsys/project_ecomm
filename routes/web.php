<?php

use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\BerandaController;
use App\Http\Controllers\User\EtalaseController;
use App\Http\Controllers\User\InformasiPenerbitanController;
use App\Http\Controllers\User\JaminanMutuController;
use App\Http\Controllers\User\JenisNaskahController;
use App\Http\Controllers\User\PengajuanController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\ProsedurPenerbitanController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [BerandaController::class, 'index']);
Route::get('/sejarah', [ProfileController::class, 'sejarah']);
Route::get('/tim-kami', [ProfileController::class, 'timKami']);
Route::get('/pengajuan-isbn', [PengajuanController::class, 'isbn']);
Route::get('/pengajuan-desain-cover', [PengajuanController::class, 'desainCover']);
Route::get('/pengajuan-layout', [PengajuanController::class, 'layout']);
Route::get('/pengajuan-proofreading', [PengajuanController::class, 'proofreading']);
Route::get('/pengajuan-editing-mekanis', [PengajuanController::class, 'editingMekanis']);
Route::get('/pengajuan-editing-subtantif', [PengajuanController::class, 'editingSubtantif']);
Route::get('/pengajuan-paket-penerbitan', [PengajuanController::class, 'paketPenerbitan']);
Route::get('/informasi-penerbitan-jenis-naskah', [InformasiPenerbitanController::class, 'jenisNaskah']);
Route::get('/informasi-penerbitan-prosedur-penerbitan', [InformasiPenerbitanController::class, 'prosedurPenerbitan']);
Route::get('/informasi-penerbitan-persyaratan-ISBN', [InformasiPenerbitanController::class, 'persyaratanISBN']);
Route::get('/etalase-best-seller', [EtalaseController::class, 'bestSeller']);
Route::get('/etalase-sedang-diskon', [EtalaseController::class, 'sedangDiskon']);
Route::get('/etalase-buku-baru', [EtalaseController::class, 'bukuBaru']);
Route::get('/segera-terbit', [BerandaController::class, 'segeraTerbit']);
Route::get('/kontak-kami', [BerandaController::class, 'kontakKami']);
Route::get('/jaminan-mutu-sistem-dokumentasi', [JaminanMutuController::class, 'sistemDokumentasi']);
Route::get('/jaminan-mutu-audit', [JaminanMutuController::class, 'audit']);
Route::get('/jaminan-mutu-tinjauan-manajemen', [JaminanMutuController::class, 'tinjauanManajemen']);
Route::get('/download', [BerandaController::class, 'download']);
Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);

//info : jenis naskah

Route::get('/buku-monograf', [JenisNaskahController::class, 'bukuMonograf']);
Route::get('/buku-referensi', [JenisNaskahController::class, 'bukuReferensi']);
Route::get('/buku-ajar-atau-modul', [JenisNaskahController::class, 'bukuAjarModul']);
Route::get('/buku-umum', [JenisNaskahController::class, 'bukuUmum']);
Route::get('/prosiding', [JenisNaskahController::class, 'prosiding']);
Route::get('/buku-fiksi', [JenisNaskahController::class, 'bukuFiksi']);

//info : prosedur penerbitan

Route::get('/prosedur-penerbitan-buku', [ProsedurPenerbitanController::class, 'buku']);
Route::get('/prosedur-penerbitan-prosiding', [ProsedurPenerbitanController::class, 'prosiding']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
