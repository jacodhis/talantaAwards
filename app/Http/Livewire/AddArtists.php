<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\event;

class AddArtists extends Component
{
    public $eventName;

    public function event($EventId){

      $eventname =  event::where('id','=',$EventId)->first();
      dd($eventname);
      $this->eventName = $eventname;

    }
    public function render()
    {
        $events = event::get();
        // $user_id = auth()->user()->id;
        // $events = event::where('user_id','=',$user_id)->get();
        return view('livewire.add-artists',compact('events'));
    }
}
