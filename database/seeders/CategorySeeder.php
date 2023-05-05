<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'categories_name'=>'Espresso'
        ]);

        Category::create([
            'categories_name'=>'Brewed'
        ]);

        Category::create([
            'categories_name'=>'Blended'
        ]);

        Category::create([
            'categories_name'=>'Others'
        ]);
    }
}
