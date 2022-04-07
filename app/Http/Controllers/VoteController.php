<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\artist;
use DB;
class VoteController extends Controller
{
    //
    public function landingPage(){
        return view('landingPage');
    }
    public function show( $id){
        $artists = DB::table('artists')->simplePaginate(2);
        $artist = artist::findorFail($id);
        $event = $artist->event;
        // $artists = artist::where('event_id','=',$event->id)->get();
                        //   ->where('id','!=',$id)->get();
        // dd($artists);
        // if($artists != NULL){
            // return view('votes.show',compact('artist','artists'));
        // }

        return view('votes.show',compact('artist','artists'));
    }
}
