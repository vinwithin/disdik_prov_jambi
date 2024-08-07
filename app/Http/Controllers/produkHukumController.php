<?php

namespace App\Http\Controllers;

use App\Models\Produkhukum;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class produkHukumController extends Controller
{
    public function index(){
        return view('admin.produk_hukum.show-hukum', [
            'hukum' => Produkhukum::paginate(10),
        ]);
    }

    public function addprodukhukum(){
        return view('admin.produk_hukum.add-hukum');
    }

    public function store(Request $request){
        $validateData = $request->validate(
            [
                'title' => 'required',
                'nomor' => 'required',
                'tentang' => 'required',
                'dokumen' => 'required|mimes:pdf|max:2048',  
                'terbit' => 'required',

            ]
        );

        $validateData['slug'] = 'require|unique:produkhukum';
        $validateData["slug"] = Str::slug($request->title, '-');
        $dokumen_name = time() . '_' . $request->dokumen->getClientOriginalName();
        // $request->image_pengumuman->storeAs('public/media/pengumuman/thumbnails', $image_name);
        $validateData['dokumen'] = $dokumen_name;
        $validateData['path'] = '/storage/prod-hukum/' . $dokumen_name;


        $result = Produkhukum::create($validateData);
        
        $request->dokumen->storeAs('public/prod-hukum', $dokumen_name);
        if ($result) {
            return redirect('/admin/prod-hukum')->with('success', 'berhasil menambahkan data');
        } else {
            return redirect('admin/prod-hukum/tambah-prod-hukum')->with("error", "Gagal menambahkan data!");
        }
    }

    public function edit(Produkhukum $produkhukum){
        $hukum = Produkhukum::find($produkhukum->id);
        return view('admin.produk_hukum.edit-hukum', ['hukum' => $hukum]);
    }
    public function update(Request $request, Produkhukum $produkhukum){
        $validateData = $request->validate([
                'title' => 'required',
                'nomor' => 'required',
                'tentang' => 'required',
                'dokumen' => 'required|mimes:pdf|max:2048',  
                'terbit' => 'required',           

            
        ]);
        $validateData["slug"] = Str::slug($request->title, '-');
        $dokumen_name = time() . '_' . $request->dokumen->getClientOriginalName();
        $validateData['dokumen'] = $dokumen_name;
        $validateData['path'] = '/storage/prod-hukum/' . $dokumen_name;


        $result = Produkhukum::where('id', $produkhukum->id)
                  ->update($validateData);
        if ($result) {
            $request->dokumen->storeAs('public/prod-hukum', $dokumen_name);
            return redirect('/admin/prod-hukum')->with('success', 'berhasil mengubah data');
        } else {
            return redirect('/admin/prod-hukum/edit-prod-hukum')->with("error", "Gagal mengubah data!");
        }
        
    }   

    public function destroy(Produkhukum $produkhukum){
        Produkhukum::where('id', $produkhukum->id)->delete(); 
        return redirect('/admin/prod-hukum')->with('success', 'pengumuman Berhasil Dihapus!');
    }

    public function detail(Produkhukum $produkhukum){
        $hukum = Produkhukum::find($produkhukum->id);
        return view('admin.produk_hukum.detail-hukum', ['hukum' => $hukum]);
    }
}
