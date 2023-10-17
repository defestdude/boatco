<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Realmodel;

class Boat extends Realmodel
{
    use HasFactory;
  

    protected $fillable = [
        'boat_name', 'merchant', 'category', 'description', 'price', 'length', 'width', 'model_year', 'comments', 'model', 'city', 'condition'
        
    ];

    public function searchableAs(): string
    {
        return 'boats_index';
    }


    public function scopeCondition (Builder $query, Int $condition): void { 
        $query->where('condition', $condition);
    }


    public function merchant() {
        return $this->belongsTo(User::class, 'merchant', 'id');
    }

    public function category() {
        return $this->belongsTo(BoatCategory::class, 'category', 'id');
    }

    public function city() {
        return $this->belongsTo(City::class, 'city', 'id');
    }

    public function model() {
        return $this->belongsTo(Model::class, 'model', 'id');
    }

    public function condition() {
        return $this->belongsTo(Conditions::class, 'condition', 'id');
    }
}
