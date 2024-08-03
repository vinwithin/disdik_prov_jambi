<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class berandaController extends Controller
{
    public function index(){
        $slide = Berita::where('slide', 'yes')->get();
        return view('pengunjung.beranda', [
            'slide' => $slide,
            'berita' => Berita::all(),
            'pengumuman' => Pengumuman::all(),
        ]);
    }
}
