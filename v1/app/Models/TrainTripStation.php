<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainTripStation extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=[
        'train_trip_id', 'station_id', 'planned_arrival_at', 'real_arrival_at', 'planned_departure_at',
        'real_departure_at', 'delay', 'platform', 'track',
    ];

    public function trip()
    {
        return $this->belongsTo(TrainTrips::class);
    }

    public function station()
    {
        return $this->belongsTo(Station::class);
    }
}
