<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\khuvuc;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class khuvucController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = khuvuc::all();
        return view('admin.khuvuc.index',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(){
        return view('admin.khuvuc.add');
    }
    
    public function store(Request $request)
    {
        $data = new khuvuc();

        $data->slug = Str::slug($request->ten_khu_vuc);
        $data->ten_khu_vuc = $request->ten_khu_vuc;
        $data->save();

        return redirect()->route('khuvuc.index')->with('success', 'Thêm thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = khuvuc::find($id);
        return view('admin.khuvuc.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = khuvuc::find($id);

        $data->ten_khu_vuc = $request->ten_khu_vuc;
        $data->slug = Str::slug($request->ten_khu_vuc, '-');

        $data->update();

        return redirect()->route('khuvuc.index')->with('success', 'Cập nhật thành công');        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = khuvuc::where('id', $id)->forceDelete();
        return redirect()->route('khuvuc.index')->with('success', 'Xóa thành công'); 
    }
}
