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
        $data = 5;
        for($i = 0; $i< $data;$i++){
            event::create([
                'event_name' => 'event'.mt_rand(1,10),
                'description' => 'lorem ipsum dorum colapse luongament',
                'user_id' => mt_rand(1,5),
            ]);
        }

    }
}
