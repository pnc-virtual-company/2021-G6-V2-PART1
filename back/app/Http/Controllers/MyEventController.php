<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\MyEvent;
class MyEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEvent()
    {
        return MyEvent::latest()->get();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createEvent(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:1999',
            'title' => 'required',
            'description' => 'required',
            'city' => 'required',
            'start_date' => 'required|before:end_date',
            'end_date' => 'required|after:start_date',
            
        ]);

        $request->file('image')->store('public/images/profiles');    

        $myevent = new MyEvent();
        $myevent->category_id = $request->category_id;
        $myevent->image = $request->image;
        $myevent->image = $request->file('image')->getClientOriginalName();
        $myevent->title = $request->title;
        $myevent->description = $request->description;
        $myevent->city = $request->city;
        $myevent->start_date = $request->start_date;
        $myevent->end_date = $request->end_date;
        
        $myevent->save();
        return response()->json(["message" => "Created", 'data'=>$myevent],201);
    } 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getOneEvent($id)
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
    public function updateEvent(Request $request, $id)
    {
       
        $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:19999',
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required|before_or_equal:end_date',
            'end_date' => 'required|after_or_equal:start_date',
            
        ]);

        $request->file('image')->store('public/images/profile');    

        $myevent = MyEvent::findOrFail($id);
        $myevent->category_id = $request->category_id;
        $myevent->image = $request->image;
        $myevent->image = $request->file('image')->hashName();
        $myevent->title = $request->title;
        $myevent->description = $request->description;
        $myevent->start_date = $request->start_date;
        $myevent->end_date = $request->end_date;
        $myevent->save();
        return response()->json(["message" => "Updated", 'data'=>$myevent],201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyEvent($id)
    {
        $isDeleted = MyEvent::destroy($id);
        if($isDeleted === 1){
            return response()->json(["message" => "Event deleted success"],200);
        }else{
            return response()->json(["message" => "ID not found"],401);
        }
    }
}
