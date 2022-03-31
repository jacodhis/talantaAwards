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
        $artists = DB::table('artists')->get();
        $artist = artist::findorFail($id);
        return view('votes.show',compact('artist','artists'));
    }
}
