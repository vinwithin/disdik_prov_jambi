<?php

namespace App\Http\Controllers;

use App\Models\Instagram;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class instagramController extends Controller
{
    public function extractInstagramPostId($url)
    {
        // Regular expression untuk mencocokkan ID postingan Instagram
        $parsedUrl = parse_url($url);
        $baseUrl = $parsedUrl['scheme'] . '://' . $parsedUrl['host'] . $parsedUrl['path'];
        $newUrl = $baseUrl . '?utm_source=ig_embed&amp;utm_campaign=loading';
        // Mengembalikan ID postingan jika ditemukan, atau null jika tidak ditemukan
        return $newUrl;
    }

    public function index()
    {
        return view('admin.instagram.show-instagram', [
            'instagram' => Instagram::paginate(10),
        ]);
    }


    public function edit(Instagram $instagram)
    {
        $instagram = Instagram::find($instagram->id);
        return view('admin.instagram.edit-instagram', ['instagram' => $instagram]);
    }
    public function update(Request $request, Instagram $instagram)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'link_instagram' => 'required',


        ]);
        $validateData["slug"] = Str::slug($request->title, '-');
        $postId = $this->extractInstagramPostId($validateData['link_instagram']);
        if ($postId) {
            $validateData['link_instagram'] = $postId;
            $result = Instagram::where('id', $instagram->id)
                ->update($validateData);
            if ($result) {

                return redirect('/admin/instagram')->with('success', 'berhasil mengubah data');
            } else {
                return redirect('/admin/instagram/edit-instagram')->with("error", "Gagal mengubah data!");
            }
        } else {
            return redirect('/admin/instagram/edit-instagram')->with("error", "Link instagram tidak valid!");
        }
    }

    public function destroy(Instagram $instagram)
    {
        Instagram::where('id', $instagram->id)->delete();
        return redirect('/admin/instagram')->with('success', 'instagram Berhasil Dihapus!');
    }

    public function detail(Instagram $instagram)
    {
        $instagram = Instagram::find($instagram->id);
        return view('admin.instagram.detail-instagram', ['instagram' => $instagram]);
    }
}
