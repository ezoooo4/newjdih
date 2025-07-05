<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController,
    DasboardController,
    ProfilController,
    DokumenController,
    BeritaController,
    AgendaController,
    DokumentasiController,
    KategoriDokumenController,
    SiteController,
};


Route::get('/', [SiteController::class, 'beranda']);
Route::get('/dokumen', [SiteController::class, 'dokumen']);
Route::get('/dokumen/{id}', [SiteController::class, 'dokumenShow'])->name('dokumen.show');
Route::get('/berita', [SiteController::class, 'berita']);
Route::get('/berita/{id}', [SiteController::class, 'beritaShow'])->name('berita.show');
Route::get('/agenda', [SiteController::class, 'agenda']);
Route::get('/agenda/{id}', [SiteController::class, 'agendaShow'])->name('agenda.show');
Route::get('/dokumentasi', [SiteController::class, 'dokumentasi']);
Route::get('/kontak', [SiteController::class, 'kontak'])->name('kontak');
Route::post('/kontak', [SiteController::class, 'kirim'])->name('kontak.kirim');
Route::get('/sejarah', [SiteController::class, 'sejarah']);
Route::get('/maknalogo', [SiteController::class, 'maknalogo']);


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'masuk'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/admin/login', [AuthController::class, 'login'])->name('admin.login');

Route::prefix('admin')->middleware(['auth:admin'])->group(function () {

    Route::get('/dashboard', [DasboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/profil', [ProfilController::class, 'profil'])->name('admin.profil');
    Route::post('/profil', [ProfilController::class, 'update'])->name('admin.profil.update');

    Route::prefix('dokumen')->controller(DokumenController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/create', 'create');
        Route::post('/store', 'store');
        Route::get('/show/{id}', 'show');
        Route::get('/edit/{id}', 'edit');
        Route::post('/update/{id}', 'update');
        Route::delete('/delete/{dokumen}', 'destroy');
    });

    Route::prefix('berita')->controller(BeritaController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/create', 'create');
        Route::post('/store', 'store');
        Route::get('/show/{id}', 'show');
        Route::get('/edit/{id}', 'edit');
        Route::put('/update/{id}', 'update');
        Route::delete('/delete/{berita}', 'destroy');
    });

    Route::prefix('agenda')->controller(AgendaController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/create', 'create');
        Route::post('/store', 'store');
        Route::get('/show/{id}', 'show');
        Route::get('/edit/{id}', 'edit');
        Route::put('/update/{id}', 'update');
        Route::delete('/delete/{agenda}', 'destroy');
    });

    Route::prefix('dokumentasi')->controller(DokumentasiController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/create', 'create');
        Route::post('/store', 'store');
        Route::get('/show/{id}', 'show');
        Route::get('/edit/{id}', 'edit');
        Route::put('/update/{id}', 'update');
        Route::delete('/delete/{dokumentasi}', 'destroy');
    });

    Route::prefix('kategori_dokumen')->controller(KategoriDokumenController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/create', 'create');
        Route::post('/store', 'store');
        Route::get('/show/{id}', 'show');
        Route::get('/edit/{id}', 'edit');
        Route::post('/update/{id}', 'update');
        Route::delete('/delete/{kategori}', 'destroy');
    });
});
