<?php

namespace App\Http\Controllers\Backend\Platform;

use App\Http\Controllers\Controller;
use App\Models\Backend\Platform;
use App\Models\Backend\PlatformCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlatformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $platformCategory=PlatformCategory::where("status", true)->get();
        return view("layouts.backend.platform.add", compact("platformCategory"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $platform=new Platform;
        $platform->name=$request->input("name");
        $platform->category_id=$request->input("category_id");
        $platform->URL=$request->input("URL");
        $platform->description=$request->input("description");
        $platform->keywords=$request->input("keywords");
        $platform->image=Storage::putFile("Platform Images", $request->file("image"));
        $platform->save();
        return redirect()->back()->with("success", "Platform added successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Backend\Platform  $platform
     * @return \Illuminate\Http\Response
     */
    public function show(Platform $platform)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Backend\Platform  $platform
     * @return \Illuminate\Http\Response
     */
    public function edit(Platform $platform)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Backend\Platform  $platform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Platform $platform)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Backend\Platform  $platform
     * @return \Illuminate\Http\Response
     */
    public function destroy(Platform $platform)
    {
        //
    }
}
