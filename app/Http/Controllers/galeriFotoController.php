<?php

namespace App\Http\Controllers;

use App\Models\Galerifoto;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class galeriFotoController extends Controller
{
    public function index(){
        return view('admin.foto.show-foto', [
            'foto' => Galerifoto::paginate(10),
        ]);
    }

    public function addfoto(){
        return view('admin.foto.add-foto');
    }

    public function store(Request $request){
        $validateData = $request->validate(
            [
                'title' => 'required',
                'foto' => 'image|mimes:png,jpg,jpeg|max:2024',  
                'slide' => 'required',            
                'penghargaan' => 'required'
            ]
        );
        $validateData['slug'] = 'require|unique:foto';
        $validateData["slug"] = Str::slug($request->title, '-');
        $image_name = time() . '_' . $request->foto->getClientOriginalName();
        // $request->image_pengumuman->storeAs('public/media/foto/thumbnails', $image_name);
        $validateData['foto'] = $image_name;
        $validateData['path'] = '/storage/foto/' . $image_name;


        $result = Galerifoto::create($validateData);
        
        $request->foto->storeAs('public/foto', $image_name);
        if ($result) {
            return redirect('/admin/foto')->with('success', 'berhasil menambahkan data');
        } else {
            return redirect('admin/foto/tambah-foto')->with("error", "Gagal menambahkan data!");
        }
    }

    public function edit(Galerifoto $foto){
        $foto = Galerifoto::find($foto->id);
        return view('admin.foto.edit-foto', ['foto' => $foto]);
    }
    public function update(Request $request, Galerifoto $foto){
        $validateData = $request->validate([
            'title' => 'required',
            'foto' => 'image|mimes:png,jpg,jpeg|max:2024',  
            'slide' => 'required',       
            'penghargaan' => 'required'


            
        ]);
        $validateData["slug"] = Str::slug($request->title, '-');
        $imageName = time() . '_' . $request->foto->getClientOriginalName();
        $validateData['foto'] = $imageName;
        $validateData['path'] = '/storage/foto/' . $imageName;


        $result = Galerifoto::where('id', $foto->id)
                  ->update($validateData);
        if ($result) {
            $request->foto->storeAs('public/foto', $imageName);

            return redirect('/admin/foto')->with('success', 'berhasil mengubah data');
        } else {
            return redirect('/admin/foto/edit-foto')->with("error", "Gagal mengubah data!");
        }
        
    }   

    public function destroy(Galerifoto $foto){
        Galerifoto::where('id', $foto->id)->delete(); 
        return redirect('/admin/foto')->with('success', 'foto Berhasil Dihapus!');
    }

    public function detail(Galerifoto $foto){
        $foto = Galerifoto::find($foto->id);
        return view('admin.foto.detail-foto', ['foto' => $foto]);
    }   
}
