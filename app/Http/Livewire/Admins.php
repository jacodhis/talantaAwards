<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use session;

class Admins extends Component
{
    public function delete($id){
        $admin = User::findorFail($id);
        $admin->delete();
           session()->flash('success','admin deleted successfully');
        //    Session::flash('success', 'admin deleted successfully');

    }

    public function render()
    {

        $admins = User::get();
        return view('livewire.admins',compact('admins'));
    }
}
