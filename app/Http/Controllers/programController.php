<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class programController extends Controller
{
    public function index(){
        return view('admin.program.show-program', [
            'program' => Program::paginate(10),
        ]);
    }

    // public function addprogram(){
    //     return view('admin.program.add-program');
    // }

    // public function store(Request $request){
    //     $validateData = $request->validate(
    //         [
    //             'title' => 'required',
    //             'body' => 'required',
          
    //         ]
    //     );
    //     $result = Program::create($validateData);
        
    //     if ($result) {
    //         return redirect('/admin/program')->with('success', 'berhasil menambahkan data');
    //     } else {
    //         return redirect('admin/program/tambah-program')->with("error", "Gagal menambahkan data!");
    //     }
    // }

    public function edit($id){
        $program = Program::find($id);
        return view('admin.program.edit-program', ['program' => $program]);
    }
    public function update(Request $request, $id){
        $validateData = $request->validate([
            'title' => 'required',
            'body' => 'required',          
        ]);

        $result = Program::where('id', $id)
                  ->update($validateData);
        if ($result) {
            return redirect('/admin/program')->with('success', 'berhasil mengubah data');
        } else {
            return redirect('/admin/program/edit-program')->with("error", "Gagal mengubah data!");
        }
        
    }   

    // public function destroy($id){
    //     Program::where('id', $id)->delete(); 
    //     return redirect('/admin/program')->with('success', 'program Berhasil Dihapus!');
    // }

    public function detail($id){
        $program = Program::find($id);
        return view('admin.program.detail-program', ['program' => $program]);
    }
}
