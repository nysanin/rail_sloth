<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSourceTrainIdentifier extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=[
        'data_source_id', 'train_id', 'identifier',
    ];

    public function dataSource()
    {
        return $this->belongsTo(DataSource::class);
    }

    public function train()
    {
        return $this->belongsTo(Train::class);
    }
}
