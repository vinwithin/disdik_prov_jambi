<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    public function index(){
        return view('admin.auth.login');
    }

    public function login(Request $request){
        $validateData = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:6|max:32',
        ]);
        if(Auth::attempt($validateData)){
            $request->session()->regenerate();
            return redirect()->intended('/admin')->with("success","Login Berhasil");
        }
        return back()->with('loginFailed', 'Email dan Password salah!');
    }
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function tampil() {
        return view('admin/auth/register');
    }
    public function register(Request $request){
        $validateData = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:32|confirmed',
        ]);
        $validateData["password"] = Hash::make($validateData["password"]);
        $validateData['level'] = 1; 
        $result = User::create($validateData);
        if($result){
            return redirect()->to('/login')->withSuccess("Berhasil Daftar Akun, Silahkan Login");
        }
    }
}
