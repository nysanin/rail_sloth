<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Train extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps=false;
    protected $fillable=[
        'name', 'number', 'starting_station_id', 'final_station_id', 'description', 'from',
    ];

    public function startingStation()
    {
        return $this->belongsTo(Station::class);
    }

    public function finalStation()
    {
        return $this->belongsTo(Station::class);
    }

    public function trips()
    {
        return $this->hasMany(TrainTrips::class);
    }

}
