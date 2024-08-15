<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Category_prod_hukum;
use App\Models\Galerifoto;
use App\Models\Galerivideo;
use App\Models\Instagram;
use App\Models\Pengumuman;
use App\Models\Produkhukum;
use App\Models\Profil;
use App\Models\Visitors;
use Illuminate\Http\Request;

class berandaController extends Controller
{
    public function index()
    {
        $berita = Berita::where('slide', 'yes')->get();
        $foto = Galerifoto::where('slide', 'yes')->get();
        // dd(Visitors::getWeeklyVisitors());
        return view('pengunjung.beranda', [
            'slide' => $berita->merge($foto),
            'berita' => Berita::orderBy('created_at', 'desc')->take(1)->get(),
            'beritaTerbaru' => Berita::orderBy('created_at', 'desc')->take(2)->get(),
            'pengumuman' => Pengumuman::orderBy('created_at', 'desc')->take(5)->get(),
            'pengumumanTerbaru' => Pengumuman::orderBy('created_at', 'desc')->take(1)->get(),
            'foto' => Galerifoto::orderBy('created_at', 'desc')->take(1)->get(),
            'fotoTerbaru' => Galerifoto::orderBy('created_at', 'desc')->take(4)->get(),
            'videoTeratas' => Galerivideo::orderBy('created_at', 'desc')->take(1)->get(),
            'videoTerbaru' => Galerivideo::orderBy('created_at', 'desc')->take(3)->get(),
            'instagram' => Instagram::all(),
            'onlineCount' => Visitors::onlineCount(),
            'dayVisitors' => Visitors::dayVisitor(),
            'harian' => Visitors::getWeeklyVisitors(),
            'weeklyVisitors' => Visitors::countWeekly(),
            'monthlyVisitors' => Visitors::countMonthly(),
            'januari' => Visitors::countForMonth(1),
            'februari' => Visitors::countForMonth(2),
            'maret' => Visitors::countForMonth(3),
            'april' => Visitors::countForMonth(4),
            'mei' => Visitors::countForMonth(5),
            'juni' => Visitors::countForMonth(6),
            'juli' => Visitors::countForMonth(7),
            'agustus' => Visitors::countForMonth(8),
            'september' => Visitors::countForMonth(9),
            'oktober' => Visitors::countForMonth(10),
            'november' => Visitors::countForMonth(11),
            'desember' => Visitors::countForMonth(12),

        ]);
    }

    public function sambutan()
    {
        return view('pengunjung.sambutan', [
            'sambutan' => Profil::where('title', 'Sambutan Kepala Dinas')->get(),
        ]);
    }
    public function visimisi()
    {
        return view('pengunjung.visimisi', [
            'visimisi' => Profil::where('title', 'Visi Misi JAMBI MANTAP 2021 - 2024')->get(),
        ]);
    }

    public function galeriFoto()
    {
        return view('pengunjung.galeri', [
            'foto' => Galerifoto::paginate(20),
            'beritaTerbaru' => Berita::orderBy('created_at', 'desc')->take(10)->get(),

        ]);
    }
    public function galeriVideo()
    {
        return view('pengunjung.video', [
            'video' => Galerivideo::paginate(20),
            'beritaTerbaru' => Berita::orderBy('created_at', 'desc')->take(10)->get(),

        ]);
    }
    public function prestasi()
    {
        return view('pengunjung.prestasi', [
            'prestasi' => Galerifoto::where('penghargaan', 'yes')->paginate(20),
            'beritaTerbaru' => Berita::orderBy('created_at', 'desc')->take(10)->get(),

        ]);
    }

    public function prestasiDetail(Galerifoto $galerifoto)
    {
        return view('pengunjung.detail-prestasi', [
            'galeriprestasi' => Galerifoto::find($galerifoto->id),
            'prestasi' => Galerifoto::where('penghargaan', 'yes')->orderBy('created_at', 'desc')->take(6)->get(),
            'beritaTerbaru' => Berita::orderBy('created_at', 'desc')->take(10)->get(),

        ]);
    }

    public function galeriVideoDetail()
    {
        return view('pengunjung.detail-video', [
            'video' => Galerivideo::all(),
            'beritaTerbaru' => Berita::orderBy('created_at', 'desc')->take(10)->get(),

        ]);
    }
    public function galeriFotoDetail(Galerifoto $galerifoto)
    {
        return view('pengunjung.detail-galeri', [
            'galerifoto' => Galerifoto::find($galerifoto->id),
            'foto' => Galerifoto::orderBy('created_at', 'desc')->take(6)->get(),
            'beritaTerbaru' => Berita::orderBy('created_at', 'desc')->take(10)->get(),

        ]);
    }

    public function prod_hukum(Category_prod_hukum $category_prod_hukum)
    {
        // dd(count($category_prod_hukum->produkhukum));
        $categoryProdHukum = Produkhukum::find($category_prod_hukum->produkhukum) ;
        if ($categoryProdHukum->isNotEmpty()) {
            // If there are, get the first item

            $hukum = Produkhukum::where('category_prod_hukum_id', $category_prod_hukum->produkhukum[0]->category_prod_hukum_id)->get();
        } else {
            // If not, set $hukum to null or handle it as needed
            $hukum = null;
        }
        return view('pengunjung.prod-hukum', [
            'hukum' => $hukum,
            'count_hukum' => $category_prod_hukum->produkhukum,
        ]);
    }
}
