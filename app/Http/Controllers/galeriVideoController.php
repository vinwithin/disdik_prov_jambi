<?php

namespace App\Http\Controllers;

use App\Models\Galerivideo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class galeriVideoController extends Controller
{
    public function index(){
        return view('admin.video.show-video', [
            'video' => Galerivideo::paginate(10),
        ]);
    }

    public function addvideo(){
        return view('admin.video.add-video');
    }

    public function store(Request $request){
        $validateData = $request->validate(
            [
                'title' => 'required', 
                'link_video' => 'required',            
            ]
        );
        $validateData['slug'] = 'require|unique:video';
        $validateData["slug"] = Str::slug($request->title, '-');
        // $request->image_pengumuman->storeAs('public/media/video/thumbnails', $image_name);

        $result = Galerivideo::create($validateData);
        
        if ($result) {
            return redirect('/admin/video')->with('success', 'berhasil menambahkan data');
        } else {
            return redirect('admin/video/tambah-video')->with("error", "Gagal menambahkan data!");
        }
    }

    public function edit(Galerivideo $video){
        $video = Galerivideo::find($video->id);
        return view('admin.video.edit-video', ['video' => $video]);
    }
    public function update(Request $request, Galerivideo $video){
        $validateData = $request->validate([
            'title' => 'required',  
            'link_video' => 'required',            

            
        ]);
        $validateData["slug"] = Str::slug($request->title, '-');
       


        $result = Galerivideo::where('id', $video->id)
                  ->update($validateData);
        if ($result) {

            return redirect('/admin/video')->with('success', 'berhasil mengubah data');
        } else {
            return redirect('/admin/video/edit-video')->with("error", "Gagal mengubah data!");
        }
        
    }   

    public function destroy(Galerivideo $video){
        Galerivideo::where('id', $video->id)->delete(); 
        return redirect('/admin/video')->with('success', 'video Berhasil Dihapus!');
    }

    public function detail(Galerivideo $video){
        $video = Galerivideo::find($video->id);
        return view('admin.video.detail-video', ['video' => $video]);
    }
}
