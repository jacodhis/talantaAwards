<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\event;

class events extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = 50;
        for($i = 0; $i< $data;$i++){
            event::create([
                'event_name' => 'event'.mt_rand(1,10),
                'description' => '',
                // 'user_id' => .'$data[i]',
            ]);
        }

    }
}
