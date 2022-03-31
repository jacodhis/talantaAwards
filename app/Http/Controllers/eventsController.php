<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event;

class eventsController extends Controller
{
    //
   public function index(){
    $events = event::get();
    return view('events.index',compact('events'));
   }
}
