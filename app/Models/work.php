<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class work extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function artist(){
        return $this->belongsTo('App\Models\artist');

    }
}
