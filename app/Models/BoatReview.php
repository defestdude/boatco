<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoatReview extends Model
{
    use HasFactory;

    public function boat() {
        return $this->belongsTo(Boat::class);
    }
}
