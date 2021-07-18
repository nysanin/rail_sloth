<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=[
      'country_id', 'name', 'en_name', 'category',
    ];

    public function trains()
    {
        return $this->hasManyThrough(TrainTrip::class, Train::class);
    }
}
