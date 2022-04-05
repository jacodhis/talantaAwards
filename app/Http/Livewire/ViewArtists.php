<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\artist;

class ViewArtists extends Component
{
    public function delete($id){
        $artist = artist::findorFail($id);
        $artist->delete();
        session()->flash('success','artist deleted successfully');
    }
    public function render()
    {
        $artists = artist::where('user_id','=',auth()->user()->id)->get();

        // $artists = artist::get();
        // dd($artists);
        return view('livewire.view-artists',compact('artists'));
    }
}
