<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class userBeritaController extends Controller
{
    public function index(){
        return view('pengunjung.berita', [
            'berita' => Berita::paginate(20),
            'beritaTerbaru' => Berita::orderBy('created_at', 'desc')->take(5)->get(),
        ]);
    }

    public function detail(Berita $berita){
        return view('pengunjung.detail-berita', [
            'berita' => Berita::find($berita->id),
            'beritaTerbaru' => Berita::orderBy('created_at', 'desc')->take(2)->get(),
        ]);
    }
}   
