<?php

namespace App\Http\Controllers\Frontend\Contact;

use App\Http\Controllers\Controller;
use App\Models\Backend\ContactCategory;
use App\Models\Backend\Ip;
use App\Models\Frontend\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contactCategories=ContactCategory::where("status", true)->get();
        return view('layouts.frontend.content.contact',compact("contactCategories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $ip=Ip::where("IP", $request->ip())->first();
        $request->validate([
            "mail"=>"required",
            "category_id"=>"required",
            "message"=>"required"
        ]);
        if($ip){
            if($ip->status==true){
                $data=new Contact;
                $data->name=$request->input('name');
                $data->surname=$request->input('surname');
                $data->mail=$request->input('mail');
                // $data->phone=$request->input('phone');
                $data->category_id=$request->input("category_id");
                $data->subject=$request->input('subject');
                // $data->description=$request->input('description');
                $data->message=$request->input('message');
                $data->save();
                return redirect()->back()->with("success", "Your message sent, thanks for your feedback...");
            }
            else{
                return redirect()->back()->with("error", "You banned, You can not send any message");
            }
        }else{
            $newIp=new Ip;
            $newIp->IP=$_SERVER["REMOTE_ADDR"];
            $newIp->status=true;
            $newIp->save();

            $data=new Contact;
            $data->name=$request->input('name');
            $data->surname=$request->input('surname');
            $data->mail=$request->input('mail');
            // $data->phone=$request->input('phone');
            $data->category_id=$request->input("category_id");
            $data->subject=$request->input('subject');
            // $data->description=$request->input('description');
            $data->message=$request->input('message');
            $data->save();
            return redirect()->back()->with("success", "Your message sent, thanks for your feedback...");
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Frontend\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Frontend\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Frontend\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Frontend\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
