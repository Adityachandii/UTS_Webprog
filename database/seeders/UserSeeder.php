<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Mr. Vico Lomar',
            'loyalty' => 'Gold Level',
            'star_reward' => '150',
        ]);
    
        User::create([
            'name' => 'Ms. Fei Fei Li',
            'loyalty' => 'Green Level',
            'star_reward' => '150',
        ]);
    }
}
