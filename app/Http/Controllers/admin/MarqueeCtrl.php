<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Marquee;
use Illuminate\Http\Request;

class MarqueeCtrl extends Controller
{
    public function index() {
        $title = "Dòng chạy khuyến mãi";
        $data = Marquee::all();
        return view('admin.marquee.index', compact('data', 'title'));
    }
    public function edit($id) {
        $data = Marquee::find($id);
        return view('admin.marquee.edit', compact('data'));
    }
    public function update(Request $request, $id) {
        $data = Marquee::find($id);
        $data->noidung = $request->noidung;
        $data->update();
        return redirect()->route('marquee.index')->with('success', 'Sửa nội dung thành công');
    }
}
