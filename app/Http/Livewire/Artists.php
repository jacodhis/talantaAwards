<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\artist;
use App\Models\event;
use Livewire\WithPagination;

class Artists extends Component
{
    use WithPagination;

    public $pagianteNumber = 10;


    public $artists;
    public $searchCategory;
    public $events;
    public $storeEventId;
    public $eventName;
    public $searchEvent;

    public function mount(){
        $artists = artist::latest()->get();
        $events = event::get();
        $this->artists = $artists;
        $this->events = $events;
    }
    public function searchEvent(){
        $event = event::where('event_name','LIKE','%'.$this->searchEvent.'%')->get();
        dd($event);
    }
    public function event($id){
        $artists = artist::where('event_id',$id)->get();
        $eventName = event::findorFail($id);
        $this->eventName = $eventName->event_name;
        $this->storeEventId = $id;
        $this->artists = $artists;
    }
    public function allArtists(){
        if(isset($this->storeEventId)){
            $artists = artist::where('event_id',$this->storeEventId)->get();
            $this->artists = $artists;
        }else{
            $artists = artist::latest()->get();
            $this->artists = $artists;
        }


    }
    public function femaleArtist(){
        if(isset($this->storeEventId)){
            $femaleArtists = artist::where('gender','=','female')
                                     ->where('event_id',$this->storeEventId)
                                     ->get();
                                    //  dd($femaleArtists);
            $this->artists = $femaleArtists;
        }else{
            $femaleArtists = artist::where('gender','=','female')->get();
            $this->artists = $femaleArtists;
        }

    }
    public function maleArtist(){
        if(isset($this->storeEventId)){
            $maleArtists = artist::where('gender','=','male')
                                     ->where('event_id',$this->storeEventId)
                                     ->get();
            $this->artists = $maleArtists;
        }else{
            $maleArtists = artist::where('gender','=','male')
                                ->where('event_id',$this->storeEventId)
                                ->get();
            $this->artists = $maleArtists;
        }

    }
    public function topMale(){
        if(isset($this->storeEventId)){
            $topMaleArtists = artist::where('gender','=','male')
                                     ->where('event_id',$this->storeEventId)
                                     ->get();
            $this->artists = $topMaleArtists;
        }else{
            $artists = artist::get();
            $this->artists = $artists;
        }

      dd("will display highest top male artists");
    }
    public function topFemale(){
        dd("will display highest top female artists");
    }
    public function render()
    {
        return view('livewire.artists');
    }
}
