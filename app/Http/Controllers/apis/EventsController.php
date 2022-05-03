<?php

namespace App\Http\Controllers\apis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\event;

class EventsController extends Controller
{
    //
    public function index(){


       $events = event::where('user_id','=',auth()->user()->id)
                         ->with('artists:event_id,name')
                          ->with('admin:id,name')->get();

        // $events = event::orderBy('created_at','desc')->with('artists:id,name')->get();
        return response([
            'name'=>auth()->user()->name,
            'events' =>$events
        ]);
    }
}
