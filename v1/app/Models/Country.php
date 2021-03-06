<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps=false;
    protected $fillable=[
      'name', 'iso_code'
    ];

    public function stations()
    {
        return $this->hasMany(Station::class);
    }

    public function railOperators()
    {
        return $this->hasMany(RailOperator::class);
    }

    public function trains()
    {
        return $this->hasMany(Train::class);
    }
}
