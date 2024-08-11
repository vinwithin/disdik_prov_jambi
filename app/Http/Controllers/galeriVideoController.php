<?php

namespace App\Http\Controllers;

use App\Models\Galerivideo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class galeriVideoController extends Controller
{
    public function extractYouTubeVideoId($url)
    {
        $regExp = '/^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#&?]*).*/';
        preg_match($regExp, $url, $match);
        return (isset($match[7]) && strlen($match[7]) == 11) ? $match[7] : null;
    }

    public function index()
    {
        return view('admin.video.show-video', [
            'video' => Galerivideo::paginate(10),
        ]);
    }

    public function addvideo()
    {
        return view('admin.video.add-video');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
                'title' => 'required',
                'link_video' => 'required',
            ]
        );
        $validateData['slug'] = 'require|unique:video';
        $validateData["slug"] = Str::slug($request->title, '-');
        $videoId = $this->extractYouTubeVideoId($validateData['link_video']);
        if ($videoId) {
            $validateData['link_video'] = "https://www.youtube.com/embed/" . $videoId;
            $result = Galerivideo::create($validateData);
            if ($result) {
                return redirect('/admin/video')->with('success', 'berhasil menambahkan data');
            } else {
                return redirect('admin/video/tambah-video')->with("error", "Gagal menambahkan data!");
            }
        } else {
            return redirect('admin/video/tambah-video')->with("error", "Link video tidak valid!");
        }
    }

    public function edit(Galerivideo $video)
    {
        $video = Galerivideo::find($video->id);
        return view('admin.video.edit-video', ['video' => $video]);
    }
    public function update(Request $request, Galerivideo $video)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'link_video' => 'required',


        ]);
        $validateData["slug"] = Str::slug($request->title, '-');
        $videoId = $this->extractYouTubeVideoId($validateData['link_video']);
        if ($videoId) {
            $validateData['link_video'] = "https://www.youtube.com/embed/" . $videoId;
            $result = Galerivideo::where('id', $video->id)
                ->update($validateData);
            if ($result) {

                return redirect('/admin/video')->with('success', 'berhasil mengubah data');
            } else {
                return redirect('/admin/video/edit-video')->with("error", "Gagal mengubah data!");
            }
        }else{
            return redirect('/admin/video/edit-video')->with("error", "Link video tidak valid!");
        }
    }

    public function destroy(Galerivideo $video)
    {
        Galerivideo::where('id', $video->id)->delete();
        return redirect('/admin/video')->with('success', 'video Berhasil Dihapus!');
    }

    public function detail(Galerivideo $video)
    {
        $video = Galerivideo::find($video->id);
        return view('admin.video.detail-video', ['video' => $video]);
    }
}
