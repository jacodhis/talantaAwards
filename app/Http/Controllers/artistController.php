<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\artist;
use DB;

class artistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // dd(mt_rand(100000,500000));
        $artists = artist::paginate(5);
        return view('index2',compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('artist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

           $artist = new artist();
           $artist->name = $request->name;
           $artist->email = $request->email;
           $artist->code = mt_rand(100000,500000);
           $artist->save();
           if($artist){
            return back();
            session()->flash('success','artist added successfully');
           }
           return back();
           session()->flash('error','artist not added successfully');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //get artist by id
        $artist = DB::table('artists')->where('id','=',$id)->first();
        if($artist == null){
            return back()->with('error','artist  does not exist');
        }
       return view('artist.show',['artist'=>$artist]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
