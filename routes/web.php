<?php

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