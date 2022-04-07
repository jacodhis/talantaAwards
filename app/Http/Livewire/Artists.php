<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\artist;
use App\Models\event;
use Livewire\WithPagination;

class Artists extends Component
{
    use WithPagination;

    public $pagianteArtistsNumber = 8;
    public $pagianteEventsNumber = 2;


    public $artists;
    public $term;
    public $events;
    public $storeEventId;
    public $eventName;

    public function mount(){
        $artists = artist::latest()->get();
        // $artists = artist::inRandomOrder()->paginate($this->pagianteArtistsNumber)->all();
        // $events = event::paginate($this->pagianteEventsNumber)->all();
        // dd($events);
        $events = event::latest()->get();
        $this->artists = $artists;
        $this->events = $events;
    }
    public function search(){
            $events = event::where('event_name','LIKE',"%$this->term%")->get();
        $this->events = $events;

    }

    public function event($id){
        $artists = artist::where('event_id',$id)->get();
        // dd($artists);
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
        // $artists = artist::latest()->get();
        // $events = event::latest()->get();
        // $this->events = $events;
        // $this->artists = $artists;
        return view('livewire.artists',[

        ]);
    }
}
