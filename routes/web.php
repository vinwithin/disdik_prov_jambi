<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\berandaController;
use App\Http\Controllers\beritaController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\galeriFotoController;
use App\Http\Controllers\galeriVideoController;
use App\Http\Controllers\instagramController;
use App\Http\Controllers\masterController;
use App\Http\Controllers\pengumumanController;
use App\Http\Controllers\produkHukumController;
use App\Http\Controllers\profilController;
use App\Http\Controllers\programController;
use App\Http\Controllers\userBeritaController;
use App\Http\Controllers\userPengumumanController;
use App\Http\Controllers\userProgramController;
use Illuminate\Support\Facades\Route;



Route::get('/', [berandaController::class, 'index']);
Route::get('/pengumuman', [userPengumumanController::class, 'index']);
// Route::get('/prod-hukum', [berandaController::class, 'prod_hukum']);
Route::get('/prod-hukum/{category_prod_hukum:slug}', [berandaController::class, 'prod_hukum']);

Route::get('/berita', [userBeritaController::class, 'index']);
Route::get('/berita/detail/{berita:slug}', [userBeritaController::class, 'detail']);


Route::get('/btikp', [userProgramController::class, 'btikp']);
Route::get('/sma', [userProgramController::class, 'sma']);
Route::get('/smk', [userProgramController::class, 'smk']);
Route::get('/pklk', [userProgramController::class, 'btikp']);
Route::get('/gtk', [userProgramController::class, 'gtk']);
Route::get('/sekretariat', [userProgramController::class, 'sekretariat']);


Route::get('/sambutan', [berandaController::class, 'sambutan']);
Route::get('/struktur-organisasi', [berandaController::class, 'struktur']);
Route::get('/visi-misi',[berandaController::class, 'visimisi']);


Route::get('/galeri-foto',[berandaController::class, 'galeriFoto']);
Route::get('/prestasi',[berandaController::class, 'prestasi']);
Route::get('/galeri-foto/{galerifoto:slug}',[berandaController::class, 'galeriFotoDetail']);
Route::get('/prestasi/{galerifoto:slug}',[berandaController::class, 'prestasidetail']);
Route::get('/galeri-video',[berandaController::class, 'galeriVideo']);
Route::get('/galeri-video/{video:slug}',[berandaController::class, 'galeriVideoDetail']);

Route::get('/login',[authController::class, 'index'])->name('login');
Route::post('/login', [authController::class, 'login']);
Route::get('/register', [authController::class, 'tampil']);
Route::post('/register', [authController::class, 'register']);

Route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('/', [dashboardController::class, 'index'])->middleware('auth');
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

    Route::get('/master' ,[masterController::class, 'index']);
    Route::get('/master/add-user' ,[masterController::class, 'adduser']);
    Route::get('/master/edit-user/{id}' ,[masterController::class, 'edit']);
    Route::post('/master/edit-user/{id}' ,[masterController::class, 'update']);
    Route::get('/master/delete/{id}', [masterController::class, 'destroy']);
    Route::post('/master/add-user' ,[masterController::class, 'store']);

    Route::get('/program' ,[programController::class, 'index']);
    Route::get('/program/edit-program/{id}' ,[programController::class, 'edit']);
    Route::get('/program/detail/{id}', [programController::class, 'detail']);
    // Route::get('/program/add-program' ,[programController::class, 'addprogram']);
    Route::post('/program/edit-program/{id}' ,[programController::class, 'update']);
    // Route::get('/program/delete/{id}', [programController::class, 'destroy']);
    // Route::post('/program/add-program' ,[programController::class, 'store']);

    Route::get('/profil' ,[profilController::class, 'index']);
    Route::get('/profil/edit-profil/{profil:slug}' ,[profilController::class, 'edit']);
    Route::get('/profil/detail/{profil:slug}', [profilController::class, 'detail']);
    Route::get('/profil/add-profil' ,[profilController::class, 'addprofil']);
    Route::post('/profil/edit-profil/{profil:slug}' ,[profilController::class, 'update']);
    Route::get('/profil/delete/{profil:slug}', [profilController::class, 'destroy']);
    Route::post('/profil/add-profil' ,[profilController::class, 'store']);

    Route::get('/foto' ,[galeriFotoController::class, 'index']);
    Route::get('/foto/edit-foto/{foto:slug}' ,[galeriFotoController::class, 'edit']);
    Route::get('/foto/detail/{foto:slug}', [galeriFotoController::class, 'detail']);
    Route::get('/foto/add-foto' ,[galeriFotoController::class, 'addfoto']);
    Route::post('/foto/edit-foto/{foto:slug}' ,[galeriFotoController::class, 'update']);
    Route::get('/foto/delete/{foto:slug}', [galeriFotoController::class, 'destroy']);
    Route::post('/foto/add-foto' ,[galeriFotoController::class, 'store']);

    Route::get('/video' ,[galeriVideoController::class, 'index']);
    Route::get('/video/edit-video/{video:slug}' ,[galeriVideoController::class, 'edit']);
    Route::get('/video/detail/{video:slug}', [galeriVideoController::class, 'detail']);
    Route::get('/video/add-video' ,[galeriVideoController::class, 'addvideo']);
    Route::post('/video/edit-video/{video:slug}' ,[galeriVideoController::class, 'update']);
    Route::get('/video/delete/{video:slug}', [galeriVideoController::class, 'destroy']);
    Route::post('/video/add-video' ,[galeriVideoController::class, 'store']);

    Route::get('/instagram' ,[instagramController::class, 'index']);
    Route::get('/instagram/edit-instagram/{instagram:slug}' ,[instagramController::class, 'edit']);
    Route::get('/instagram/detail/{instagram:slug}', [instagramController::class, 'detail']);
    // Route::get('/instagram/add-instagram' ,[instagramController::class, 'addinstagram']);
    Route::post('/instagram/edit-instagram/{instagram:slug}' ,[instagramController::class, 'update']);
    Route::get('/instagram/delete/{instagram:slug}', [instagramController::class, 'destroy']);
    // Route::post('/instagram/add-instagram' ,[instagramController::class, 'store']);
    
    Route::get('/prod-hukum' ,[produkHukumController::class, 'index']);
    Route::get('/prod-hukum/edit-prod-hukum/{produkhukum:slug}' ,[produkHukumController::class, 'edit']);
    Route::get('/prod-hukum/detail/{produkhukum:slug}', [produkHukumController::class, 'detail']);
    Route::get('/prod-hukum/add-prod-hukum' ,[produkHukumController::class, 'addprodukhukum']);
    Route::post('/prod-hukum/edit-prod-hukum/{produkhukum:slug}' ,[produkHukumController::class, 'update']);
    Route::get('/prod-hukum/delete/{produkhukum:slug}', [produkHukumController::class, 'destroy']);
    Route::post('/prod-hukum/add-prod-hukum' ,[produkHukumController::class, 'store']);


    Route::get('/logout', [authController::class, 'logout']);

    

});