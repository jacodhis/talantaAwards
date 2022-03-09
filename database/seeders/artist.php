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
            'code' => mt_rand(100000,500000),
        ]);
        DB::table('artists')->insert([
            'name' =>' artist two',
            'code' => '789106'
        ]);
        DB::table('artists')->insert([
            'name' =>' artist three',
            'code' => '131415'
        ]);
        DB::table('artists')->insert([
            'name' =>' artist four',
            'code' => '161718'
        ]);
        DB::table('artists')->insert([
            'name' =>' artist five',
            'code' => '192021'
        ]);
        DB::table('artists')->insert([
            'name' =>' artist six',
            'code' => '222324'
        ]);
        

        DB::table('artists')->insert([
            'name' =>' artist seven',
            'code' => '252627'
        ]);
        DB::table('artists')->insert([
            'name' =>' artist eight',
            'code' => '282930'
        ]);
        DB::table('artists')->insert([
            'name' =>' artist nine',
            'code' => '313233'
        ]);
        DB::table('artists')->insert([
            'name' =>' artist ten',
            'code' => '343536'
        ]);
        DB::table('artists')->insert([
            'name' =>' artist eleven',
            'code' => '373839'
        ]);
        DB::table('artists')->insert([
            'name' =>' artist twelve',
            'code' => '404142'
        ]);

    }
}
