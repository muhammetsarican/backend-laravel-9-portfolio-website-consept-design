<?php

namespace App\Http\Controllers\Backend\Comment;

use App\Http\Controllers\Controller;
use App\Models\Backend\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CommentController extends Controller
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
        return view("layouts.backend.comment.add");
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
        $comment=new Comment;
        $comment->customer_name=$request->input("customer_name");
        $comment->given_rate=$request->input("given_rate");
        $comment->comment_date=$request->date("comment_date");
        $comment->customer_photo=Storage::putFile("Comment Customer Photos", $request->file("customer_photo"));
        $comment->comment=$request->input("comment");
        $comment->save();
        return redirect()->back()->with("success", "Comment added succesfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Backend\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Backend\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Backend\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Backend\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
