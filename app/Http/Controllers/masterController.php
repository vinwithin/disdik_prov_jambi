<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class masterController extends Controller
{
    public function index(){
        return view('admin.master.show-user', [
            'user' => User::paginate(10),
        ]);
    }

    public function adduser(){
        return view('admin.master.add-user');
    }
    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email:dns',
                'password' => 'required|min:6|max:32',
                'level' => 'required'
            ]
        );
        $validateData['password'] = Hash::make($validateData['password']);

        $result = User::create($validateData);
        if ($result) {
            return redirect('/admin/master')->with('success', 'berhasil menambahkan data');
        } else {
            return redirect('admin/master/tambah-user')->with("error", "Gagal menambahkan data!");
        }
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.master.edit-user', ['user' => $user]);
    }
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required|min:6|max:32',
            'level' => 'required'


        ]);
        $validateData['password'] = Hash::make($validateData['password']);

        $result = User::where('id', $id)
            ->update($validateData);
        if ($result) {
            return redirect('/admin/master')->with('success', 'berhasil mengubah data');
        } else {
            return redirect('/admin/master/edit-user')->with("error", "Gagal mengubah data!");
        }
    }

    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect('/admin/master')->with('success', 'User Berhasil Dihapus!');
    }
}
