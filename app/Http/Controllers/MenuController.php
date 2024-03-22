<?php

namespace App\Http\Controllers;

use App\Models\baiviet;
use App\Models\blogTT;
use App\Models\khuvuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MenuController extends Controller
{
    //

    public function trangchu() {
       
        // dd($tinhthanh);
        $data = baiviet::where('id', 1)->first();
        $tinhthanh = khuvuc::with('tinhthanh')->get();
        return view('template.nguoi_dung', compact('data','tinhthanh'));
    }
    
    public function internet() {
        $data = baiviet::where('id', 2)->first();
        $tinhthanh = khuvuc::with('tinhthanh')->get();
        return view('template.nguoi_dung', compact('data','tinhthanh'));
    }
    
    public function camera() {
        $data = baiviet::where('id', 3)->first();
        $tinhthanh = khuvuc::with('tinhthanh')->get();
        return view('template.nguoi_dung', compact('data','tinhthanh'));
    }
    
    public function truyenhinh() {
        $data = baiviet::where('id', 4)->first();
        $tinhthanh = khuvuc::with('tinhthanh')->get();
        return view('template.nguoi_dung', compact('data','tinhthanh'));
    }
    
    public function playbox() {
        $data = baiviet::where('id', 8)->first();
        $tinhthanh = khuvuc::with('tinhthanh')->get();
        return view('template.nguoi_dung', compact('data','tinhthanh'));
    }
    
    public function hotro() {
        $data = baiviet::where('id', 9)->first();
        $tinhthanh = khuvuc::with('tinhthanh')->get();
        return view('template.nguoi_dung', compact('data','tinhthanh'));
    }
    
    public function goicuoccb() {
        $data = baiviet::where('id', 5)->first();
        $tinhthanh = khuvuc::with('tinhthanh')->get();
        return view('template.nguoi_dung', compact('data','tinhthanh'));
    }
    
    public function goicuocmr() {
        $data = baiviet::where('id', 6)->first();
        $tinhthanh = khuvuc::with('tinhthanh')->get();
        return view('template.nguoi_dung', compact('data','tinhthanh'));
    }
    
    public function danhsachkenh() {
        $data = baiviet::where('id', 7)->first();
        $tinhthanh = khuvuc::with('tinhthanh')->get();
        return view('template.nguoi_dung', compact('data','tinhthanh'));
    }
    
    public function spkithuat() {
        $data = baiviet::where('id', 10)->first();
        $tinhthanh = khuvuc::with('tinhthanh')->get();
        return view('template.nguoi_dung', compact('data','tinhthanh'));
    }
    
    public function ttvscs() {
        $data = baiviet::where('id', 11)->first();
        $tinhthanh = khuvuc::with('tinhthanh')->get();
        return view('template.nguoi_dung', compact('data','tinhthanh'));
    }

    //show cac bai viet tinh thanh

    public function bvtt($id) {
        $data = blogTT::where('id_dia_chi', $id)->first();
        $tinhthanh = khuvuc::with('tinhthanh')->get();
        return view('template.nguoi_dung', compact('data','tinhthanh'));
    }
}
