<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoatBoatFeatures extends Model
{
    protected $fillable = [
        'feature_name', 'feature_description'
        
    ];

    use HasFactory;
}
