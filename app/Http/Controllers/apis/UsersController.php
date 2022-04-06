<?php

namespace App\Http\Controllers\apis;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UsersController extends Controller
{
    //
    public function register(Request $request){
        $data = file_get_contents('php://input');
        $dat = json_decode($data);
        $user = User::where('email',$dat->email)->first();
        if($user){
            $response = [
                "message"=>"email already exists,Try another email"
            ];
            return response()->json($response);
        }
        $user = User::create([
            'name'=>$dat->name,
            'email'=>$dat->email,
            'password'=>Hash::make($dat->password),
        ]);

        if($user){
            $token = $user->createToken('registrationToken')->plainTextToken;
            $response = [
               "message"=>"success",
               "token"=>$token,
               "user"=>$user
           ];

            return response()->json($response);
        }
    }
    public function login(){
        $data = file_get_contents('php://input');
        $dat = json_decode($data);
        // return $dat;

        $user = User::where('email',$dat->email)->first();

        if (! $user || ! Hash::check($dat->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        $token = $user->createToken('loginToken')->plainTextToken;
        return response()->json(['user'=>$user,'token'=>$token]);

    }
    public function logout(){
        auth()->user()->tokens()->delete();
        return response()->json(['message'=>'logout out successfully']);
    }
}
