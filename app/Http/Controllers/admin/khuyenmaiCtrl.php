<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\khuyenMai;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class khuyenmaiCtrl extends Controller
{
    public function index()
    {
        $title = "Khuyến mãi";
        $data = khuyenMai::paginate(15);

        return view('admin.khuyenmai.index', compact('data', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create()
    {
        return view('admin.khuyenmai.add');
    }
    public function upload(Request $request)
    {
        if($request->hasFile('upload')){
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();

            $fileName = $fileName . '_' . time() . '.' . $extension;
            $request->file('upload')->move(public_path('media'), $fileName);

            $url = asset('media/'. $fileName);

            return response()->json(['fileName'=>$fileName, 'uploaded' => 1, 'url' => $url]);
        }   
    }
    public function store(Request $request)
    {
        $data = new khuyenMai();

        // $data->id_dia_chi = $request->id_dia_chi;
        $data->title = $request->title;
        $data->slug = Str::slug($request->title);
        $data->description = $request->description;
        $data->keywords = $request->keywords;
        $data->meta_description = $request->meta_description;
        $data->meta_title = $request->meta_title;
        
        
        
        $data->save();
        return redirect()->route('sale.index')->with('success', 'Thêm bài viết thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = khuyenMai::find($id);
        // $tinhthanh = tinhthanh::all();

        return view('admin.khuyenmai.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = khuyenMai::find($id);

        // $data->id_dia_chi = $request->id_dia_chi;
        $data->title = $request->title;
        // $data->slug = Str::slug($request->title);
        $data->description = $request->description;
        $data->keywords = $request->keywords;
        $data->meta_description = $request->meta_description;
        $data->meta_title = $request->meta_title;

        $data->update();
        return redirect()->route('sale.index')->with('success', 'Sửa bài viết thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function checkDelete(Request $request){
        $ids = $request->ids;
        dd($ids);
        if(isset($ids)){
            $check = khuyenMai::whereIn('id', $ids)->forceDelete();
            if($check){
                return redirect()->route('sale.index')->with('success', 'Xoá bài viết thành công');
            }
        }else{
            toastr()->error('Xóa thất bại, chọn các mục cần xóa');
            return back();
        }
        
        
    }
    public function destroy()
    {
        khuyenMai::truncate();
        return redirect()->route('sale.index')->with('success', 'Xoá bài viết thành công');
    }
}
