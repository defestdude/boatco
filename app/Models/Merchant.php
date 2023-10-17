<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    use HasFactory;

    protected $fillable = [
        'merchant_name', 'merchant_address', 'phone'
        
    ];

    public function representative() {
        return $this->belongsTo(User::class);
    }
}
