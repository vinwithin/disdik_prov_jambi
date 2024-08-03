<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class userPengumumanController extends Controller
{
    public function index(){
        return view('pengunjung.pengumuman', [
            'pengumuman' => Pengumuman::all(),
        ]);
    }
}
