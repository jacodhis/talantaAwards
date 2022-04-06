<?php

namespace App\Http\Controllers\apis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\artist;

class ArtistController extends Controller
{
    //
    public function index(){
        $data = artist::get();
        return response()->json($data);
    }
}
