<?php

use App\Http\Controllers\HomeContoller;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\KategoriDokumenController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

// Route::get('/ooo', function () {
//     return view('components.app');
// });


Route::controller(SiteController::class)->group(function(){
    Route::get('/', 'beranda');
    Route::get('/dokumen', 'dokumen');
    Route::get('/dokumen/{id}', 'dokumenShow')->name('dokumen.show');
    Route::get('/berita', 'berita');
    Route::get('/agenda', 'agenda');
    Route::get('/dokumentasi', 'dokumentasi');
});


Route::prefix('admin')->group(function () {

    Route::controller(DasboardController::class)->group(function () {
        Route::get('/', 'index');
        
        
    });

    Route::prefix('dokumen')->controller(DokumenController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/create', 'create');
        Route::post('/store', 'store');
        Route::get('/show/{id}', 'show');
        Route::get('/edit/{id}', 'edit');
        Route::put('/update/{id}', 'update');
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
        Route::delete('delete/{dokumentasi}', 'destroy');
    });
    Route::prefix('kategori_dokumen')->controller(KategoriDokumenController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/create', 'create');
        Route::post('/store', 'store');
        Route::get('/show/{id}', 'show');
        Route::get('/edit/{id}', 'edit');
        Route::post('/update/{id}', 'update');
        Route::delete('delete/{kategori}', 'destroy');
    });
    Route::prefix('dasboar')->controller(DasboardController::class)->group(function () {
        Route::get('/', 'index');
    });
});


    
        
  
    

