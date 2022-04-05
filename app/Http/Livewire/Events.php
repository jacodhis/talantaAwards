<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\event;

class Events extends Component
{
    public function delete($id){
        $event = event::findorFail($id);
        $event->delete();
           session()->flash('success','event deleted successfully');
    }
    public function render()
    {
        $events = event::where('user_id','=',auth()->user()->id)->get();
        // dd($events);
        return view('livewire.events',compact('events'));
    }
}
