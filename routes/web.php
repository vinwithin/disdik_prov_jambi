<?php

use App\Http\Controllers\beritaController;
use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;



Route::get('/', function() {
    return view('pengunjung.beranda');
});

Route::get('/sambutan', function() {
    return view('pengunjung.sambutan');
});
Route::get('/visi-misi', function() {
    return view('pengunjung.visimisi');
});
Route::get('/sekretariat', function() {
    return view('pengunjung.sekretariat');
});
Route::get('/berita', function() {
    return view('pengunjung.berita');
});
Route::get('/pengumuman', function() {
    return view('pengunjung.pengumuman');
});
Route::get('/galeri-foto', function() {
    return view('pengunjung.galeri');
});

Route::prefix('admin')->group(function(){
    Route::get('/', [dashboardController::class, 'index']);
    Route::get('/berita' ,[beritaController::class, 'index']);
    Route::get('/berita/add-berita' ,[beritaController::class, 'addberita']);
    Route::post('/berita' ,[beritaController::class, 'store']);

});