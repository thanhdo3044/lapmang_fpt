<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\khuvuc;
use App\Models\tinhthanh;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class tinhthanhController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = tinhthanh::with('khuvuc')->orderBy('id', 'desc')->paginate(15);

        return view('admin.tinhthanh.index', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create() {
        $data = khuvuc::all();

        return view('admin.tinhthanh.add', compact('data'));
    }
    public function store(Request $request)
    {
        $data = new tinhthanh();
        // dd($request->all());
        $data->ten_tinh_thanh = $request->ten_tinh_thanh;
        $data->slug = Str::slug($request->ten_tinh_thanh);
        $data->id_khu_vuc = $request->id_khu_vuc;
        // dd($data);
        $data->save();

        return redirect()->route('tinhthanh.index')->with('success', 'Thêm thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = tinhthanh::find($id);
        $khuvuc = khuvuc::all();
        return view('admin.tinhthanh.edit', compact('data', 'khuvuc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = tinhthanh::find($id);
        $data->ten_tinh_thanh = $request->ten_tinh_thanh;
        $data->slug = Str::slug($request->ten_tinh_thanh);
        $data->id_khu_vuc = $request->id_khu_vuc;

        $data->update();

        return redirect()->route('tinhthanh.index')->with('success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = tinhthanh::where('id', $id)->forceDelete();

        return redirect()->route('tinhthanh.index')->with('success', 'Xóa thành công');
    }
}
