<?php

namespace App\Http\Controllers\apis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\artist;

class ArtistController extends Controller
{
    //
    public function index(){
        return response([
            'data' => auth()->user()->loadartists(),
        ]);
    }
}
