<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artist extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function works(){
        return $this->hasMany('App\Models\work');

    }
 }
