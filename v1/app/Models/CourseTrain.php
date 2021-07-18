<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseTrain extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable=[
        'train_id', 'station_id',
    ];

    public function train(): Train
    {
        return $this->belongsTo(Train::class);
    }

    public function station() :Station
    {
        return $this->belongsTo(Station::class);
    }
}
