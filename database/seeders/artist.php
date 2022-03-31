<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class artist extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('artists')->insert([
            'name' =>' artist one',
            'email' =>' artistone@gmail.com',
            'code' => mt_rand(100000,500000),
            'gender' => 'male'

        ]);
        DB::table('artists')->insert([
            'name' =>' artist two',
            'email' =>' artisttwo@gmail.com',
            'code' => '789106',
            'gender' => 'female'
        ]);
        DB::table('artists')->insert([
            'name' =>' artist three',
            'email' =>' artistthree@gmail.com',
            'code' => '131415',
            'gender' => 'male'
        ]);
        // DB::table('artists')->insert([
        //     'name' =>' artist four',
        //     'email' =>' artistfour@gmail.com',
        //     'code' => '161718'
        // ]);
        // DB::table('artists')->insert([
        //     'name' =>' artist five',
        //     'email' =>' artistfive@gmail.com',
        //     'code' => '192021'
        // ]);
        // DB::table('artists')->insert([
        //     'name' =>' artist six',
        //     'email' =>' artisix@gmail.com',
        //     'code' => '222324'
        // ]);


        // DB::table('artists')->insert([
        //     'name' =>' artist seven',
        //     'email' =>' artistseven@gmail.com',
        //     'code' => '252627'
        // ]);
        // DB::table('artists')->insert([
        //     'name' =>' artist eight',
        //     'email' =>' artistseight@gmail.com',
        //     'code' => '282930'
        // ]);
        // DB::table('artists')->insert([
        //     'name' =>' artist nine',
        //     'email' =>' artistnine@gmail.com',
        //     'code' => '313233'
        // ]);


    }
}
