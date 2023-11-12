<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\BerandaController;
use App\Http\Controllers\User\PengajuanController;
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
Route::get('/sejarah', [BerandaController::class, 'sejarah']);
Route::get('/tim-kami', [BerandaController::class, 'timKami']);
Route::get('/pengajuan-isbn', [PengajuanController::class, 'isbn']);
Route::get('/pengajuan-desain-cover', [PengajuanController::class, 'desainCover']);
Route::get('/pengajuan-layout', [PengajuanController::class, 'layout']);
Route::get('/pengajuan-proofreading', [PengajuanController::class, 'proofreading']);
Route::get('/pengajuan-editing-mekanis', [PengajuanController::class, 'editingMekanis']);
Route::get('/pengajuan-editing-subtantif', [PengajuanController::class, 'editingSubtantif']);
Route::get('/pengajuan-paket-penerbitan', [PengajuanController::class, 'paketPenerbitan']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
