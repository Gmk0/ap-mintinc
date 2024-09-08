<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertySell extends Model
{
    use HasFactory;

    protected $fillable=[
          'title',
            'description',
            'status',
            'prix',
            'area',
            'nom',
            'numero',
            'email',
            'category_id',
        ];
}
