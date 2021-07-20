<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnknownObject extends Model
{
    use HasFactory;
    const Types=[
      'station', 'trip', 'train',
    ];
}
