<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Realmodel;

class Model extends Realmodel
{
    protected $fillable = [
        'model', 'manufacturer'
        
    ];

    public function manufacturer() {
        return $this->belongsTo(Manufacturer::class);
    }

    use HasFactory;
}
