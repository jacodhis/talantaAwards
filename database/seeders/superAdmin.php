<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use DB;
class superAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name' =>' superAdmin',
        //     'email' =>' superAdmin@gmail.com',
        //     'userType' =>'superAdmin',
        //     'password' => Hash::make('12345678'),
        //     'remember_token' => Str::random(60),

        // ]);
        // DB::table('users')->insert([
        //     'name' =>'admin 2',
        //     'email' =>' admintwo@gmail.com',
        //     'userType' => 'admin',
        //     'password' => Hash::make('12345678'),
        //     'remember_token' => Str::random(60),
        // ]);
        // DB::table('users')->insert([
        //     'name' =>' admin 3',
        //     'email' =>' adminthree@gmail.com',
        //     'userType' => 'admin',
        //     'password' => Hash::make('12345678'),
        //     'remember_token' => Str::random(60),
        // ]);
        //
        $user = User::create([
            'name' => 'Super Admin',
            'email' => 'superAdmin@gmail.com',
            'userType' => 'Admin',
            'role_id' =>1,
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(60),
        ]);

        $user = User::create([
            'name' => 'Super Admin',
            'email' => 'admin1@gmail.com',
            'userType' => 'Admin',
            'role_id' =>2,
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(60),
        ]);
        $user = User::create([
            'name' => 'Super Admin',
            'email' => 'admin3@gmail.com',
            'userType' => 'Admin',
            'role_id' =>2,
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(60),
        ]);




    }
}
