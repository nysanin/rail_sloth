<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSource extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table=[
        'name', 'endpoint',
    ];

    public function stations()
    {
        return $this->hasMany(Station::class);
    }
}
