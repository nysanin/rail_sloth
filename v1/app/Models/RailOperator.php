<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RailOperator extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps=false;
    protected $fillable=[
      'country_id', 'name',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function trains()
    {
        return $this->hasMany(Train::class);
    }
}
