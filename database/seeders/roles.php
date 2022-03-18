<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\role;

class roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roles = [
            ['id'=>'1','role' => 'admin'],
            ['id'=>'2','role' => 'artist'],
            ['id'=>'3','role' => 'user'],
       ];
        foreach ($roles as $role) {
            role::create($role);
        }

    }
}
