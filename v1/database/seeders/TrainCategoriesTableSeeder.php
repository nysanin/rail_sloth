<?php

namespace Database\Seeders;

use App\Models\TrainCategory;
use Illuminate\Database\Seeder;

class TrainCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TrainCategory::create([
            'name'=>'IC',
        ]);

        TrainCategory::create([
            'name'=>'TLK',
        ]);

        TrainCategory::create([
           'name'=>'Regio',
        ]);
    }
}
