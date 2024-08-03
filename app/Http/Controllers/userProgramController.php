<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class userProgramController extends Controller
{
    public function btikp(){
        return view('pengunjung.program.btikp', [
            'btikp' => Program::where('title', 'BTIKP')->get(),
        ]);
    }
    public function sekretariat(){
        return view('pengunjung.program.sekretariat', [
            'sekretariat' => Program::where('title', 'SEKRETARIAT')->get(),
        ]);
    }
    
    public function sma(){
        return view('pengunjung.program.sma', [
            'sma' => Program::where('title', 'Bidang Pembinaan SMA')->get(),
        ]);
    }
    public function smk(){
        return view('pengunjung.program.smk', [
            'smk' => Program::where('title', 'Bidang Pembinaan SMK')->get(),
        ]);
    }
    public function pklk(){
        return view('pengunjung.program.pklk', [
            'pklk' => Program::where('title', 'Bidang Pembinaan PKLK')->get(),
        ]);
    }

    public function gtk(){
        return view('pengunjung.program.gtk', [
            'gtk' => Program::where('title', 'Bidang Pembinaan GTK')->get(),
        ]);
    }
}
