<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;
   protected $table = 'roles';
   protected $guarded = [];

    // public function admin(){
    //     return $this->belongsTo('App\Models\User');
    // }
}
