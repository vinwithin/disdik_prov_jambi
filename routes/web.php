<?php

use App\Http\Controllers\berandaController;
use App\Http\Controllers\beritaController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\pengumumanController;
use App\Http\Controllers\programController;
use App\Http\Controllers\userBeritaController;
use App\Http\Controllers\userPengumumanController;
use App\Http\Controllers\userProgramController;
use Illuminate\Support\Facades\Route;



Route::get('/', [berandaController::class, 'index']);
Route::get('/pengumuman', [userPengumumanController::class, 'index']);

Route::get('/berita', [userBeritaController::class, 'index']);
Route::get('/berita/detail/{berita:slug}', [userBeritaController::class, 'detail']);


Route::get('/btikp', [userProgramController::class, 'btikp']);
Route::get('/sma', [userProgramController::class, 'sma']);
Route::get('/smk', [userProgramController::class, 'smk']);
Route::get('/pklk', [userProgramController::class, 'btikp']);
Route::get('/gtk', [userProgramController::class, 'gtk']);
Route::get('/sekretariat', [userProgramController::class, 'sekretariat']);


Route::get('/sambutan', function() {
    return view('pengunjung.sambutan');
});
Route::get('/visi-misi', function() {
    return view('pengunjung.visimisi');
});
Route::get('/sekretariat', function() {
    return view('pengunjung.sekretariat');
});

Route::get('/galeri-foto', function() {
    return view('pengunjung.galeri');
});

Route::prefix('admin')->group(function(){
    Route::get('/', [dashboardController::class, 'index']);
    Route::get('/berita' ,[beritaController::class, 'index']);
    Route::get('/berita/detail/{berita:slug}', [beritaController::class, 'detail']);
    Route::get('/berita/add-berita' ,[beritaController::class, 'addberita']);
    Route::get('/berita/edit-berita/{berita:slug}' ,[beritaController::class, 'edit']);
    Route::post('/berita/edit-berita/{berita:slug}' ,[beritaController::class, 'update']);
    Route::get('/berita/delete/{berita:slug}', [beritaController::class, 'destroy']);
    Route::post('/berita' ,[beritaController::class, 'store']);

    Route::get('/pengumuman' ,[pengumumanController::class, 'index']);
    Route::get('/pengumuman/detail/{pengumuman:slug}', [pengumumanController::class, 'detail']);
    Route::get('/pengumuman/add-pengumuman' ,[pengumumanController::class, 'addpengumuman']);
    Route::get('/pengumuman/edit-pengumuman/{pengumuman:slug}' ,[pengumumanController::class, 'edit']);
    Route::post('/pengumuman/edit-pengumuman/{pengumuman:slug}' ,[pengumumanController::class, 'update']);
    Route::get('/pengumuman/delete/{pengumuman:slug}', [pengumumanController::class, 'destroy']);
    Route::post('/pengumuman/add-pengumuman' ,[pengumumanController::class, 'store']);

    Route::get('/program' ,[programController::class, 'index']);
    Route::get('/program/edit-program/{id}' ,[programController::class, 'edit']);
    // Route::get('/program/detail/{id}', [programController::class, 'detail']);
    Route::get('/program/add-program' ,[programController::class, 'addprogram']);
    Route::post('/program/edit-program/{id}' ,[programController::class, 'update']);
    // Route::get('/program/delete/{id}', [programController::class, 'destroy']);
    // Route::post('/program/add-program' ,[programController::class, 'store']);
    

});