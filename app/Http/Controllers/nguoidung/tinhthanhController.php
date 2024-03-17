<?php

namespace App\Http\Controllers\nguoidung;

use App\Http\Controllers\Controller;
use App\Models\khuvuc;
use App\Models\tinhthanh;
use Illuminate\Http\Request;

class tinhthanhController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tinhthanh = khuvuc::with('tinhthanh')->get();

        return response()->json($tinhthanh);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
