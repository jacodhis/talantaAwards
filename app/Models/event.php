<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;

    protected $table = 'events';
    protected $fillable = [];

    public function admin(){
        return $this->belongsTo('App\Models\User');
    }
    public function artists(){
        return $this->hasMany('App\Models\artist');
    }

    public function allEvents(){
        $events = event::where('user_id','=',auth()->user()->id)
        ->with('artists:event_id,name')
         ->with('admin:id,name')->get();
         return auth()->user()->id;

    }
}
