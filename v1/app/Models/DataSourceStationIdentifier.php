<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSourceStationIdentifier extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=[
        'data_source_id', 'station_id', 'identifier',
    ];

    public function dataSource()
    {
        return $this->belongsTo(DataSource::class);
    }

    public function station()
    {
        return $this->belongsTo(Station::class);
    }
}
