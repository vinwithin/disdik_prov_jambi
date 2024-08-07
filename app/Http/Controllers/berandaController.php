<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galerifoto;
use App\Models\Pengumuman;
use App\Models\Produkhukum;
use App\Models\Profil;
use Illuminate\Http\Request;

class berandaController extends Controller
{
    public function index(){
        $berita = Berita::where('slide', 'yes')->get();
        $foto = Galerifoto::where('slide', 'yes')->get();
        return view('pengunjung.beranda', [
            'slide' => $berita->merge($foto),
            'berita' => Berita::orderBy('created_at', 'desc')->take(1)->get(),
            'beritaTerbaru' => Berita::orderBy('created_at', 'desc')->take(2)->get(),
            'pengumuman' => Pengumuman::orderBy('created_at', 'desc')->take(5)->get(),
            'pengumumanTerbaru' => Pengumuman::orderBy('created_at', 'desc')->take(1)->get(),
            'fotoTerbaru' => Galerifoto::orderBy('created_at', 'desc')->take(10)->get(),

        ]);
    }

    public function sambutan(){
        return view('pengunjung.sambutan', [
            'sambutan' => Profil::where('title', 'Sambutan Kepala Dinas')->get(),
        ]);
    }
    public function visimisi(){
        return view('pengunjung.visimisi', [
            'visimisi' => Profil::where('title', 'Visi Misi JAMBI MANTAP 2021 - 2024')->get(),
        ]);
    }

    public function galeriFoto(){
        return view('pengunjung.galeri', [
            'foto' => Galerifoto::all(),
            'beritaTerbaru' => Berita::orderBy('created_at', 'desc')->take(10)->get(),
            
        ]);
    }

    public function prod_hukum(){
        return view('pengunjung.prod-hukum',[
            'hukum' => Produkhukum::paginate(5),
        ]);
    }
}
