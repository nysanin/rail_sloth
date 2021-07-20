<?php

namespace Database\Seeders;

use App\Models\DataSource;
use Illuminate\Database\Seeder;

class DataSourceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DataSource::create([
            'name'=>'InfoPasażer',
            'endpoint'=>'https://infopasazer.intercity.pl/?p={object_type}&id={identifier}',
        ]);
    }
}
