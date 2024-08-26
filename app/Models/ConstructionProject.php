<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConstructionProject extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'localisation',
        'status',
        'property_id',
    ];

    // The attributes that should be cast to native types.
    protected $casts = [
        'start_date' => 'date', // Cast start_date to a Carbon date instance
        'end_date' => 'date', // Cast end_date to a Carbon date instance
        'status' => 'string', // Cast status to a string (could use enum if you have specific values)
    ];
}
