<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\artist;

class Artists extends Component
{
    public $name;
    public $email;
    public $search;

    protected $rules=[
        'name'=> 'required|min:3|max:50',
        'email' => 'required|email'
    ];

    public function submit(){
        dd('hi');
        $this->validate();
    }

    public function render()
    {

        return view('livewire.artists',[ 'allArtists' => artist::when($this->search,function($query){
            return  $query->where('name','LIKE','%'.$this->search.'%');

            })->orderBy('name','ASC')->get()
        ]);
    }
}
