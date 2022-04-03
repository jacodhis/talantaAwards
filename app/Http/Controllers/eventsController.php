<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event;

class eventsController extends Controller
{
    //
   public function index(){
    // $events = event::get();
    $events = event::where('user_id','=',auth()->user()->id)->get();
    // dd($events);
    return view('events.index',compact('events'));
   }
}
