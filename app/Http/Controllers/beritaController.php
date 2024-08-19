<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class beritaController extends Controller
{
    public function index(){
        return view('admin.berita.show-berita', [
            'berita' => Berita::paginate(10),
        ]);
    }

    public function addberita(){
        return view('admin.berita.add-berita');
    }

    public function store(Request $request){
        $validateData = $request->validate(
            [
                'title' => 'required',
                'body' => 'required',
                'gambar' => 'required|image|mimes:png,jpg,jpeg|max:2024',
                'slide' => 'required'                
            ]
        );
        $validateData["user_id"] = auth()->user()->id;
        $validateData["dibuat"] = auth()->user()->name;
        $validateData['slug'] = 'require|unique:berita';
        $validateData["slug"] = Str::slug($request->title, '-');
        $validateData["excerpt"] = Str::limit(strip_tags($request->body), 300);
        $image_name = time() . '_' . $request->gambar->getClientOriginalName();
        // $request->image_berita->storeAs('public/media/berita/thumbnails', $image_name);
        $validateData['gambar'] = $image_name;
        $validateData['path'] = '/storage/berita/' . $image_name;


        $result = Berita::create($validateData);
        
        $request->gambar->storeAs('public/berita', $image_name);
        if ($result) {
            return redirect('/admin/berita')->with('success', 'berhasil menambahkan data');
        } else {
            return redirect('admin/berita/tambah-berita')->with("error", "Gagal menambahkan data!");
        }
    }

    public function edit(Berita $berita){
        $berita = Berita::find($berita->id);
        return view('admin.berita.edit-berita', ['berita' => $berita]);
    }
    public function update(Request $request, Berita $berita){
        $validateData = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'gambar' => 'required|image|mimes:png,jpg,jpeg|max:2024',
            'slide' => 'required' 
            
        ]);
        $validateData["user_id"] = auth()->user()->id;
        $validateData["dibuat"] = auth()->user()->name;
        $validateData["slug"] = Str::slug($request->title, '-');
        $validateData["excerpt"] =  Str::limit(strip_tags($request->body), 300);
        $imageName = time() . '_' . $request->gambar->getClientOriginalName();
        $validateData['gambar'] = $imageName;
        $validateData['path'] = '/storage/berita/' . $imageName;


        $result = Berita::where('id', $berita->id)
                  ->update($validateData);
        if ($result) {
            $request->gambar->storeAs('public/berita', $imageName);
            return redirect('/admin/berita')->with('success', 'berhasil mengubah data');
        } else {
            return redirect('/admin/berita/edit-berita')->with("error", "Gagal mengubah data!");
        }
        
    }   

    public function destroy(Berita $berita){
        Berita::where('id', $berita->id)->delete(); 
        return redirect('/admin/berita')->with('success', 'Berita Berhasil Dihapus!');
    }

    public function detail(Berita $berita){
        $berita = Berita::find($berita->id);
        return view('admin.berita.detail-berita', ['berita' => $berita]);
    }
}
