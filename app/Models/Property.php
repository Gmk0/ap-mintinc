<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Spatie\Sluggable\{HasSlug, HasTranslatableSlug};
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Property extends Model implements HasMedia
{
    use HasFactory;

    use InteractsWithMedia;


    use HasTranslations, HasTranslatableSlug;

    public $translatable = ['title', 'description', 'slug'];



    // The attributes that are mass assignable.
    protected $fillable = [
        'title',
        'description',
        'price',
        'type',
        'address',
        'city',
        'state',
        'country',
        'area',
        'bedrooms',
        'bathrooms',
        'garages',
        'status',
    ];

    // The attributes that should be cast to native types.
    protected $casts = [
        'price' => 'decimal:2', // Cast price to a decimal with 2 decimal places
        'area' => 'integer', // Cast area to an integer
        'bedrooms' => 'integer', // Cast bedrooms to an integer
        'bathrooms' => 'integer', // Cast bathrooms to an integer
        'garages' => 'integer', // Cast garages to an integer
        'status' => 'string', // Cast status to a string (could use enum if you have specific values)
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::createWithLocales(['fr', 'en'])
        ->generateSlugsFrom(function ($model, $locale) {
            return "{$locale} {$model->title}";
        })
            ->saveSlugsTo('slug');
    }
}
