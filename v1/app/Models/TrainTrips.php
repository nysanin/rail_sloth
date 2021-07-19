<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainTrips extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=[
        'train_id', 'started_at', 'planned_at', 'arrived_at', 'last_synchro_at', 'delayed', 'cancelled', 'special_info',
        'timezone',
    ];

    public function train()
    {
        return $this->belongsTo(Train::class);
    }
}
