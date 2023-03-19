<?php

namespace App\Http\Controllers\Backend\WorkCategory;

use App\Http\Controllers\Controller;
use App\Models\Backend\Category;
use App\Models\Backend\Work;
use App\Models\Backend\WorkCategory;
use Illuminate\Http\Request;

class WorkCategoryController extends Controller
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
        $works=Work::get();
        $categories=Category::get();
        return view("layouts.backend.workcategory.add", compact("works", "categories"));
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
        $workCategory=new WorkCategory;
        $workCategory->work_id=$request->input("work_id");
        $workCategory->category_id=$request->input("category_id");
        $workCategory->save();
        return redirect()->back()->with("success", "Work category added successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Backend\WorkCategory  $workCategory
     * @return \Illuminate\Http\Response
     */
    public function show(WorkCategory $workCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Backend\WorkCategory  $workCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(WorkCategory $workCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Backend\WorkCategory  $workCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WorkCategory $workCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Backend\WorkCategory  $workCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkCategory $workCategory)
    {
        //
    }
}
