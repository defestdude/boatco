<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoatCategory extends Model
{
    protected $fillable = [
        'category_name', 'category_description'
        
    ];
    
    use HasFactory;
}
