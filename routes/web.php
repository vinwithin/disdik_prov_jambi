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