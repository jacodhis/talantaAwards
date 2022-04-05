<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event;

class eventsController extends Controller
{
    //
   public function index(){
    return view('events.index');
   }
   public function create(){
    return view('events.create');
   }
   public function store(Request $request){
    //    dd($request->all());
       $event = new event();
       $event->event_name = $request->name;
       $event->description = $request->description;
       $event->user_id = auth()->user()->id;
       $event->save();
       return back()->with('success','Event created successfully');
   }
}
