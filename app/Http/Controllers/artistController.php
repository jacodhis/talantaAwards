<?php

namespace App\Http\Controllers;

use DB;
use App\Models\artist;
use App\Models\payment;
use App\Models\event;
use Illuminate\Http\Request;

class artistController extends Controller
{
    public function artists()
    {
        return view('artist.index');
    }
    public function create($eventId)
    {
        $event = event::where('id','=',$eventId)->first();
        if($event != null){
            return view('artist.create',compact('event'));
        }else{
            return back()->with('error','event does not exist');
        }


    }

    public function store(Request $request)
    {
        // dd($request->all());
        if ($request->hasFile('image')) {
            $filenamewithext = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenamewithext, PATHINFO_FILENAME);
            $ext = $request->file('image')->getClientOriginalExtension();
            $filenametostore = $filename . '_' . time() . '.' . $ext;
            $path = $request->file('image')->storeAs('public/artistImages', $filenametostore);
        } else {
            $filenametostore = 'noimage.jpg';
        }

           $artist = new artist();
           $artist->name = $request->name;
           $artist->email = $request->email;
           $artist->code = mt_rand(100000,500000);
           $artist->gender = $request->gender;
           $artist->image = $filenametostore;
           $artist->event_id = $request->event_id ?? "";
           $artist->user_id = auth()->user()->id;
           $artist->save();
           if($artist){
            return back()->with('success','artist added successfully');
           }else{
            return back()->with('error','artist not added successfully');

           }



    }

    public function show($id)
    {
        //get artist by id
        $artist = DB::table('artists')->where('id',$id)->first();

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
    public function edit(Request $request,$id)
    {
        //
        $artist = artist::findorFail($id);
        $event =$artist->event ?? "";
         return view('artist.edit',compact('artist','event'));

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
        if ($request->hasFile('image')) {
            $filenamewithext = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenamewithext, PATHINFO_FILENAME);
            $ext = $request->file('image')->getClientOriginalExtension();
            $filenametostore = $filename . '_' . time() . '.' . $ext;
            $path = $request->file('image')->storeAs('public/artistImages', $filenametostore);
        } else {
            $filenametostore = 'noimage.jpg';
        }
        //
        $artist = artist::findorFail($id);
        $artist->name = $request->name;
        $artist->email = $request->email;
        $artist->code = mt_rand(100000,500000);
        $artist->gender = $request->gender;
        $artist->image = $filenametostore;
        $artist->event_id = $request->event_id ?? "";
        $artist->user_id = auth()->user()->id;
        $artist->save();
        if($artist){
         return back()->with('success','artist added successfully');
        }else{
         return back()->with('error','artist not added successfully');

        }
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
