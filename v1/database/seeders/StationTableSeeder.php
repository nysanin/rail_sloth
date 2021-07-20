<?php

namespace Database\Seeders;

use App\Models\DataSourceStationIdentifier;
use App\Models\Station;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Station::create([
            'country_id'=>1,
            'name'=>'Warszawa Wschodnia',
            'en_name'=>'Warsaw East',
            'class'=>'A',
            'last_synchro_at'=>Carbon::now(),
        ]);
        DataSourceStationIdentifier::create([
            'data_source_id'=>1,
            'station_id'=>1,
            'identifier'=>'38653',
        ]);
    }
}
