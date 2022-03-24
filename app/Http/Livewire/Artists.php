<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Artist;

class Artists extends Component
{
    public $name;
    public $email;


    public function submit(){
        // $this->validate();
        // artist::create([
        //     'name'=>$this->name,
        //     'email' =>$this->email
        // ]);
    }
    public function render()
    {
        $artists = artist::paginate(5);
        return view('livewire.artists',compact('artists'));
    }
}
