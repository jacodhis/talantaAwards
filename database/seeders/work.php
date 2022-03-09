<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class work extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('works')->insert([
            'name' =>' work one',
            'artist_id' => '1'
        ]);
        DB::table('works')->insert([
            'name' =>' work two',
            'artist_id' => '5'
        ]);
        DB::table('works')->insert([
            'name' =>' work three',
            'artist_id' => '2'
        ]);
        DB::table('works')->insert([
            'name' =>' work four',
            'artist_id' => '3'
        ]);
        DB::table('works')->insert([
            'name' =>' work five',
            'artist_id' => '1'
        ]);
        DB::table('works')->insert([
            'name' =>' work six',
            'artist_id' => '1'
        ]);
        DB::table('works')->insert([
            'name' =>' work seven',
            'artist_id' => '4'
        ]);
        DB::table('works')->insert([
            'name' =>' work eight',
            'artist_id' => '2'
        ]);
        DB::table('works')->insert([
            'name' =>' work nine',
            'artist_id' => '3'
        ]);
        DB::table('works')->insert([
            'name' =>' work ten',
            'artist_id' => '1'
        ]);
        DB::table('works')->insert([
            'name' =>' work eleven',
            'artist_id' => '5'
        ]);
        DB::table('works')->insert([
            'name' =>' work twelve',
            'artist_id' => '2'
        ]);
        DB::table('works')->insert([
            'name' =>' work thirteen',
            'artist_id' => '2'
        ]);
        DB::table('works')->insert([
            'name' =>' work fourteen',
            'artist_id' => '2'
        ]);
        DB::table('works')->insert([
            'name' =>' work fifteen',
            'artist_id' => '2'
        ]);
    }
}
