<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class profilController extends Controller
{
    public function index()
    {
        return view('admin.profil.show-profil', [
            'profil' => Profil::paginate(10),
        ]);
    }

    public function addprofil()
    {
        return view('admin.profil.add-profil');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
                'title' => 'required',
                'body' => 'required',
                'image' => 'image|mimes:png,jpg,jpeg|max:2024',
            ]
        );
        $validateData['slug'] = 'require|unique:profil';
        $validateData["slug"] = Str::slug($request->title, '-');
        $image_name = time() . '_' . $request->image->getClientOriginalName();
        $validateData['image'] = $image_name;

        $result = Profil::create($validateData);

        if ($result) {
            $request->image->storeAs('public/profil', $image_name);
            return redirect('/admin/profil')->with('success', 'berhasil menambahkan data');
        } else {
            return redirect('admin/profil/tambah-profil')->with("error", "Gagal menambahkan data!");
        }
    }

    public function edit(Profil $profil)
    {
        $profil = Profil::find($profil->id);
        return view('admin.profil.edit-profil', ['profil' => $profil]);
    }
    public function update(Request $request, Profil $profil)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg|max:2024',

        ]);
        $validateData["slug"] = Str::slug($request->title, '-');
        $image_name = time() . '_' . $request->image->getClientOriginalName();
        $validateData['image'] = $image_name;

        $result = Profil::where('id', $profil->id)
            ->update($validateData);
        if ($result) {
            $request->image->storeAs('public/profil', $image_name);
            return redirect('/admin/profil')->with('success', 'berhasil mengubah data');
        } else {
            return redirect('/admin/profil/edit-profil')->with("error", "Gagal mengubah data!");
        }
    }

    public function destroy(Profil $profil)
    {
        Profil::where('id', $profil->id)->delete();
        return redirect('/admin/profil')->with('success', 'profil Berhasil Dihapus!');
    }

    public function detail(Profil $profil)
    {
        $profil = Profil::find($profil->id);
        return view('admin.profil.detail-profil', ['profil' => $profil]);
    }

    
}
