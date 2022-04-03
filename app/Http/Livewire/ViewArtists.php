<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\artist;

class ViewArtists extends Component
{
    public function delete($id){
        $artist = artist::findorFail($id);
        $artist->delete();
    }
    public function render()
    {
        $artists = artist::where('user_id','=',auth()->user()->id)->get();
        // dd($artists);
        // $artists = artist::get();
        return view('livewire.view-artists',compact('artists'));
    }
}
