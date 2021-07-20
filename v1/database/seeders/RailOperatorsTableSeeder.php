<?php

namespace Database\Seeders;

use App\Models\RailOperator;
use Illuminate\Database\Seeder;

class RailOperatorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RailOperator::create([
            'country_id'=>1,
            'name'=>'IC',
        ]);
        RailOperator::create([
            'country_id'=>1,
            'name'=>'TLK',
        ]);
        RailOperator::create([
            'country_id'=>1,
            'name'=>'REGIO',
        ]);
    }
}
