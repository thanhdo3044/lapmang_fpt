<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{

    public function index()
    {
        return view('auth.dangnhap_dangki');
    }
    public function dangki()
    {
        return view('auth.dangnhap_dangki');
    }

    public function login(Request $request)
    {
        if(Auth::attempt(['phone'=>$request->phone, 'password'=>$request->password],true)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard')->with('success', 'Đăng nhập thành công');
        }
        return redirect()->route('auth.index')->with('error', 'Đăng nhập thất bại');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('menu.trangchu')->with('success', 'Đã đăng xuất');
    }

    public function signup(Request $request)
    {
        $data = new User();

        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->role = 0;

        $data->save();

        return redirect()->route('auth.login')->with('success', 'Đăng kí thành công, mời bạn đăng nhập.');
    }

}
