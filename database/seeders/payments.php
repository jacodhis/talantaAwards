<?php

namespace Database\Seeders;

use App\Models\payment;
use Illuminate\Database\Seeder;

class payments extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = 20;
        for($i=0;$i<$data;$i++){
            payment::create([
                'phone'=>mt_rand(1000000000,7000000000),
                'amount'=>mt_rand(1,100),
                'artist_code'=>mt_rand(10000,50000),
            ]);
        }
    }
}
