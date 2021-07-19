<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSourceTrainTripIdentifier extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=[
        'data_source_id', 'train_trip_id', 'identifier',
    ];

    public function dataSource()
    {
        return $this->belongsTo(DataSource::class);
    }

    public function trainTrip()
    {
        return $this->belongsTo(TrainTrips::class);
    }

}
