<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ViewElement extends Model
{
    use HasFactory;

    use HasTranslations;

    public $translatable = ['about'];


    // The attributes that are mass assignable.
    protected $fillable = [
        'about',
        'team',
        ];

    protected function casts(): array
    {
        return [
            'team' => 'array',

        ];
    }



}
