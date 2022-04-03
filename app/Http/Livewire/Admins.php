<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Admins extends Component
{
    public function render()
    {

        $admins = User::get();
        return view('livewire.admins',compact('admins'));
    }
}
