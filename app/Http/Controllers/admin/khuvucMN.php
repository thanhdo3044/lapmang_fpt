<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BlogMN;
use Illuminate\Http\Request;
use App\Models\tinhthanh;
use Illuminate\Support\Str;

class khuvucMN extends Controller
{
    public function index()
    {
        $title = "KHU VỰC MIỀN NAM";
        $data = BlogMN::with('tinhthanh')->orderBy('id', 'desc')->paginate(15);

        return view('admin.baiviet.miennam.index', compact('data', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create()
    {
        $data = tinhthanh::where('id_khu_vuc',6)->get();
        $blogTT = BlogMN::all();
        return view('admin.baiviet.miennam.add', compact('data','blogTT'));
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
        $data = new BlogMN();

        $data->id_dia_chi = $request->id_dia_chi;
        $data->title = $request->title;
        $data->slug = Str::slug($request->title);
        $data->description = $request->description;
        $data->keywords = $request->keywords;
        $data->meta_description = $request->meta_description;
        $data->meta_title = $request->meta_title;
        
        
        
        $data->save();
        return redirect()->route('blogmt.index')->with('success', 'Thêm bài viết thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = BlogMN::find($id);
        $tinhthanh = tinhthanh::all();

        return view('admin.baiviet.miennam.edit', compact('data', 'tinhthanh'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = BlogMN::find($id);

        $data->id_dia_chi = $request->id_dia_chi;
        $data->title = $request->title;
        // $data->slug = Str::slug($request->title);
        $data->description = $request->description;
        $data->keywords = $request->keywords;
        $data->meta_description = $request->meta_description;
        $data->meta_title = $request->meta_title;

        $data->update();
        return redirect()->route('blogmt.index')->with('success', 'Sửa bài viết thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
