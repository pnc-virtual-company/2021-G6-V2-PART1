<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyEvent;
class MyEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return MyEvent::latest()->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            "StartDate" => "required",
            "EndDate"=> "required",
            "image" => "required|image|mimes:jpg,jpeg,png|max:1999",
        ]);
        // Move image to storage folder  
        $request->file('image')->storeAs('public/images');
        // insert in to database 
        $myevent = new MyEvent();
        $myevent->title = $request->title;
        $myevent->StartDate = $request->startDate;
        $myevent->EndDate = $request->EndDate;
        $myevent->image = $request->file("image")->hashName();
        $myevent->save(); 
        return response()->json(["message" => "data" -> $myevent],201);
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return MyEvent::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',
            "StartDate" => "required",
            "EndDate"=> "required",
            "image" => "required|image|mimes:jpg,jpeg,png|max:1999",
        ]);
        // Move image to storage folder  
        $request->file('image')->storeAs('public/images');
        // insert in to database 
        $myevent = MyEvent::findOrFail($id);
        $myevent->title = $request->title;
        $myevent->StartDate = $request->startDate;
        $myevent->EndDate = $request->EndDate;
        $myevent->image = $request->file("image")->hashName();
        $myevent->save(); 
        return response()->json(["message" => "data" -> $myevent ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return MyEvent::destroy($id);
    }
}
