<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\event;
use App\Models\artist;
class Events extends Component
{
    public function delete($id){

        $event = event::findorFail($id);
        // $artists = artist::where('event_id',$id)->get();
        // $artist->delete();
        // dd($event);
        $event->delete();
           session()->flash('success','event deleted successfully');
    }
    public function render()
    {
        $events = event::where('user_id','=',auth()->user()->id)->get();

        return view('livewire.events',compact('events'));
    }
}
