<?php

namespace App\Http\Controllers;

use App\Http\Controllers\admin\BlogTinhThanh;
use App\Models\baiviet;
use App\Models\BlogMB;
use App\Models\blogTT;
use App\Models\khuvuc;
use App\Models\khuyenMai;
use App\Models\Marquee;
use App\Models\TinTucNew;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class MenuController extends Controller
{
    //

    public function trangchu()
    {

        // dd($tinhthanh);
        $data = baiviet::where('id', 1)->first();
        $tinhthanh = khuvuc::with('tinhthanh')->get();
        return view('template.nguoi_dung', compact('data', 'tinhthanh'));
    }

    public function internet()
    {
        $data = baiviet::where('id', 2)->first();
        $tinhthanh = khuvuc::with('tinhthanh')->get();
        return view('template.nguoi_dung', compact('data', 'tinhthanh'));
    }

    public function camera()
    {
        $data = baiviet::where('id', 3)->first();
        $tinhthanh = khuvuc::with('tinhthanh')->get();
        return view('template.nguoi_dung', compact('data', 'tinhthanh'));
    }

    public function truyenhinh()
    {
        $data = baiviet::where('id', 4)->first();
        $tinhthanh = khuvuc::with('tinhthanh')->get();
        return view('template.nguoi_dung', compact('data', 'tinhthanh'));
    }

    public function playbox()
    {
        $data = baiviet::where('id', 8)->first();
        $tinhthanh = khuvuc::with('tinhthanh')->get();
        return view('template.nguoi_dung', compact('data', 'tinhthanh'));
    }

    public function hotro()
    {
        $data = baiviet::where('id', 9)->first();
        $tinhthanh = khuvuc::with('tinhthanh')->get();
        return view('template.nguoi_dung', compact('data', 'tinhthanh'));
    }

    public function goicuoccb()
    {
        $data = baiviet::where('id', 5)->first();
        $tinhthanh = khuvuc::with('tinhthanh')->get();
        return view('template.nguoi_dung', compact('data', 'tinhthanh'));
    }

    public function goicuocmr()
    {
        $data = baiviet::where('id', 6)->first();
        $tinhthanh = khuvuc::with('tinhthanh')->get();
        return view('template.nguoi_dung', compact('data', 'tinhthanh'));
    }

    public function danhsachkenh()
    {
        $data = baiviet::where('id', 7)->first();
        $tinhthanh = khuvuc::with('tinhthanh')->get();
        return view('template.nguoi_dung', compact('data', 'tinhthanh'));
    }

    public function spkithuat()
    {
        $data = baiviet::where('id', 10)->first();
        $tinhthanh = khuvuc::with('tinhthanh')->get();
        return view('template.nguoi_dung', compact('data', 'tinhthanh'));
    }

    public function ttvscs()
    {
        $data = baiviet::where('id', 11)->first();
        $tinhthanh = khuvuc::with('tinhthanh')->get();
        return view('template.nguoi_dung', compact('data', 'tinhthanh'));
    }

    //show cac bai viet tinh thanh

    public function bvtt($id)
    {

        $all = DB::table('blog_t_t_s')
            ->select('*')
            ->unionAll(DB::table('blog_m_b_s')->select('*'))
            ->unionAll(DB::table('blog_m_t_s')->select('*'))
            ->unionAll(DB::table('blog_m_n_s')->select('*'))
            ->get();
        $data = $all->where('id_dia_chi', $id)->first();
        // dd($data);
        $tinhthanh = khuvuc::with('tinhthanh')->get();
        return view('template.nguoi_dung', compact('data', 'tinhthanh'));
    }
    public function tintucnew() {
        $data = TinTucNew::orderBy('id', 'desc')->first();
        $similarTT = TinTucNew::orderBy('id', 'desc')->skip(1)->take(9999999999)->get();
        $tinhthanh = khuvuc::with('tinhthanh')->get();
        return view('template.nguoi_dung', compact('data', 'tinhthanh', 'similarTT'));
    }
    public function tintucsimilar($slug)  {
        $data = TinTucNew::where('slug', $slug)->first();
        $similarTT = TinTucNew::whereNotIn('slug', [$slug])->orderBy('id', 'desc')->take(9999999999)->get();
        $tinhthanh = khuvuc::with('tinhthanh')->get();
        return view('template.nguoi_dung', compact('data', 'tinhthanh', 'similarTT'));
    }
    public function khuyenmai() {
        $data = khuyenMai::orderBy('id', 'desc')->first();
        $similarKM = khuyenMai::orderBy('id', 'desc')->skip(1)->take(9999999999)->get();
        $tinhthanh = khuvuc::with('tinhthanh')->get();
        return view('template.nguoi_dung', compact('data', 'tinhthanh', 'similarKM'));
    }
    public function khuyenmaisimilar($slug)  {
        $data = khuyenMai::where('slug', $slug)->first();
        $similarKM = khuyenMai::whereNotIn('slug', [$slug])->orderBy('id', 'desc')->take(9999999999)->get();
        $tinhthanh = khuvuc::with('tinhthanh')->get();
        return view('template.nguoi_dung', compact('data', 'tinhthanh', 'similarKM'));
    }
    public function marquee() {
        $marquee = Marquee::all();
        return view('template.nguoi_dung', ['marquee'=> $marquee]);
    }
}
