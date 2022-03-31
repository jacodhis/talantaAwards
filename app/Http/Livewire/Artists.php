<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\artist;
use App\Models\event;
class Artists extends Component
{
    public $artists;
    public $searchCategory;
    public $events;

    public function mount(){
        $artists = artist::latest()->get();
        $events = event::get();
        $this->artists = $artists;
        $this->events = $events;
    }
    public function allArtists(){
        $artists = artist::latest()->get();
       $this->artists = $artists;
    }
    public function femaleArtist(){
        $femaleArtists = artist::where('gender','=','female')->get();
        $this->artists = $femaleArtists;
    }
    public function maleArtist(){
        $maleArtists = artist::where('gender','=','male')->get();
        $this->artists = $maleArtists;
    }
    public function topMale(){
      dd("will display highest top male");
    }
    public function topFemale(){
        dd("will display highest top female");
    }
    public function render()
    {
        return view('livewire.artists');
    }
}
