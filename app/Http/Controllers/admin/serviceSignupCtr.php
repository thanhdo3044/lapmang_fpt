<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\dangkidv;
use Illuminate\Http\Request;

class serviceSignupCtr extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = dangkidv::create($request->all());
        return redirect()->route('menu.trangchu')->with('success', 'Đăng kí dịch vụ thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
