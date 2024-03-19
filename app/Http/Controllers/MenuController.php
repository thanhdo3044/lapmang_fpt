<?php

namespace App\Http\Controllers;

use App\Models\baiviet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MenuController extends Controller
{
    //

    public function trangchu() {
        $data = baiviet::where('id', 1)->first();
        return view('template.nguoi_dung', compact('data'));
    }
    
    public function internet() {
        $data = baiviet::where('id', 2)->first();
        return view('template.nguoi_dung', compact('data'));
    }
    
    public function camera() {
        $data = baiviet::where('id', 3)->first();
        return view('template.nguoi_dung', compact('data'));
    }
    
    public function truyenhinh() {
        $data = baiviet::where('id', 4)->first();
        return view('template.nguoi_dung', compact('data'));
    }
    
    public function playbox() {
        $data = baiviet::where('id', 8)->first();
        return view('template.nguoi_dung', compact('data'));
    }
    
    public function hotro() {
        $data = baiviet::where('id', 9)->first();
        return view('template.nguoi_dung', compact('data'));
    }
    
    public function goicuoccb() {
        $data = baiviet::where('id', 5)->first();
        return view('template.nguoi_dung', compact('data'));
    }
    
    public function goicuocmr() {
        $data = baiviet::where('id', 6)->first();
        return view('template.nguoi_dung', compact('data'));
    }
    
    public function danhsachkenh() {
        $data = baiviet::where('id', 7)->first();
        return view('template.nguoi_dung', compact('data'));
    }
    
    public function spkithuat() {
        $data = baiviet::where('id', 10)->first();
        return view('template.nguoi_dung', compact('data'));
    }
    
    public function ttvscs() {
        $data = baiviet::where('id', 11)->first();
        return view('template.nguoi_dung', compact('data'));
    }
}
