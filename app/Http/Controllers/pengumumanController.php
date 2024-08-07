<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class pengumumanController extends Controller
{
    public function index(){
        return view('admin.pengumuman.show-pengumuman', [
            'pengumuman' => Pengumuman::paginate(10),
        ]);
    }

    public function addpengumuman(){
        return view('admin.pengumuman.add-pengumuman');
    }

    public function store(Request $request){
        $validateData = $request->validate(
            [
                'title' => 'required',
                'body' => 'required',
                'dokumen' => 'required',            
            ]
        );
        $validateData["user_id"] = 1;
        $validateData['slug'] = 'require|unique:pengumuman';
        $validateData["slug"] = Str::slug($request->title, '-');
        $validateData["excerpt"] = Str::limit(strip_tags($request->body), 300);
        $dokumen_name = time() . '_' . $request->dokumen->getClientOriginalName();
        // $request->image_pengumuman->storeAs('public/media/pengumuman/thumbnails', $image_name);
        $validateData['dokumen'] = $dokumen_name;

        $result = Pengumuman::create($validateData);
        
        $request->dokumen->storeAs('public/pengumuman', $dokumen_name);
        if ($result) {
            return redirect('/admin/pengumuman')->with('success', 'berhasil menambahkan data');
        } else {
            return redirect('admin/pengumuman/tambah-pengumuman')->with("error", "Gagal menambahkan data!");
        }
    }

    public function edit(Pengumuman $pengumuman){
        $pengumuman = Pengumuman::find($pengumuman->id);
        return view('admin.pengumuman.edit-pengumuman', ['pengumuman' => $pengumuman]);
    }
    public function update(Request $request, Pengumuman $pengumuman){
        $validateData = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'dokumen' => 'required',            

            
        ]);
        $validateData["user_id"] = 1;
        $validateData["slug"] = Str::slug($request->title, '-');
        $validateData["excerpt"] =  Str::limit(strip_tags($request->body), 300);
        $dokumen_name = time() . '_' . $request->dokumen->getClientOriginalName();
        $validateData['dokumen'] = $dokumen_name;

        $result = Pengumuman::where('id', $pengumuman->id)
                  ->update($validateData);
        if ($result) {
            $request->dokumen->storeAs('public/pengumuman', $dokumen_name);
            return redirect('/admin/pengumuman')->with('success', 'berhasil mengubah data');
        } else {
            return redirect('/admin/pengumuman/edit-pengumuman')->with("error", "Gagal mengubah data!");
        }
        
    }   

    public function destroy(Pengumuman $pengumuman){
        Pengumuman::where('id', $pengumuman->id)->delete(); 
        return redirect('/admin/pengumuman')->with('success', 'pengumuman Berhasil Dihapus!');
    }

    public function detail(Pengumuman $pengumuman){
        $pengumuman = Pengumuman::find($pengumuman->id);
        return view('admin.pengumuman.detail-pengumuman', ['pengumuman' => $pengumuman]);
    }   
}
