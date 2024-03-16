<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\baiviet;
use App\Models\tinhthanh;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogTinhThanh extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = baiviet::with('tinhthanh')->orderBy('id', 'desc')->paginate(15);

        return view('admin.baiviet.tinhthanh.index', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create()
    {
        $data = tinhthanh::all();

        return view('admin.baiviet.tinhthanh.add', compact('data'));
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
        $data = new baiviet();

        $data->id_dia_chi = $request->id_dia_chi;
        $data->title = $request->title;
        $data->slug = Str::slug($request->title);
        $data->description = $request->description;

        $data->save();
        return redirect()->route('blog.index')->with('success', 'Thêm bài viết thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = baiviet::find($id);
        $tinhthanh = tinhthanh::all();

        return view('admin.baiviet.tinhthanh.edit', compact('data','tinhthanh'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = baiviet::find($id);

        $data->id_dia_chi = $request->id_dia_chi;
        $data->title = $request->title;
        $data->slug = Str::slug($request->title);
        $data->description = $request->description;

        $data->update();
        return redirect()->route('blog.index')->with('success', 'Sửa bài viết thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
