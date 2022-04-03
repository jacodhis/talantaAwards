<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artist extends Model
{
    use HasFactory;

    protected $table= 'artists';
    protected $guarded = [];

    public function admin(){
        return $this->belongsTo('App\Models\User');
    }
 }
