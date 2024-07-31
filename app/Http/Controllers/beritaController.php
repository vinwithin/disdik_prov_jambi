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
                'image_berita' => 'required|image|mimes:png,jpg,jpeg|max:2024',
                
            ]
        );
        $validateData["user_id"] = auth()->user()->id;
        $validateData['slug'] = 'require|unique:berita';
        $validateData["slug"] = Str::slug($request->title, '-');
        $validateData["excerpt"] = Str::limit(strip_tags($request->body), 300);
        $image_name = time() . '_' . $request->image_berita->getClientOriginalName();
        // $request->image_berita->storeAs('public/media/berita/thumbnails', $image_name);
        $validateData['image_berita'] = $image_name;

        $result = Berita::create($validateData);
        
        $request->image_berita->storeAs('public', $image_name);
        if ($result) {
            return redirect('/admin/berita')->with('success', 'berhasil menambahkan data');
        } else {
            return redirect('admin/berita/tambah-berita')->with("error", "Gagal menambahkan data!");
        }
    }

    public function update(Request $request){
        $validateData = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image_berita' => 'required|image|mimes:png,jpg,jpeg|max:2024',
            
        ]);
        $validateData["slug"] = Str::slug($request->title, '-');
        $validateData["excerpt"] =  Str::limit(strip_tags($request->body), 300);
        $imageName = time() . '_' . $request->image_berita->getClientOriginalName();
        $validateData['image_berita'] = $imageName;

        $result = Berita::where('id', $request->id)
                  ->update($validateData);
        if ($result) {
            $request->image_berita->storeAs('public', $imageName);
            return redirect('/admin/berita')->with('success', 'berhasil mengubah data');
        } else {
            return redirect('/admin/berita/edit-berita')->with("error", "Gagal mengubah data!");
        }
        
    }   

    public function destroy(Berita $berita){
        Berita::where('id', $berita->id)->delete(); 
        return redirect('/admin/berita')->with('success', 'Berita Berhasil Dihapus!');
    }
}
