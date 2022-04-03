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
        $artists = artist::get();
        return view('livewire.view-artists',compact('artists'));
    }
}
