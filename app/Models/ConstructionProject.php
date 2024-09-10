<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Spatie\Sluggable\{HasSlug, HasTranslatableSlug};
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
class ConstructionProject extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use HasSlug;


    protected $fillable = [
        'title',
        'description',
        'start_date',
        'slug',
        'end_date',
        'localisation',
        'Category',
        'client',
        'price',
        'status',
        'property_id',
        'at_view',
    ];

    use HasTranslations, HasSlug;

    public $translatable = ['title', 'description','localisation'];

    // The attributes that should be cast to native types.
    protected $casts = [
        'start_date' => 'date', // Cast start_date to a Carbon date instance
        'end_date' => 'date', // Cast end_date to a Carbon date instance
        'status' => 'string',
        'at_view' =>'boolean'// Cast status to a string (could use enum if you have specific values)
    ];

    /**
     * Get the options for generating the slug.
     */

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function category()
    {

        return $this->belongsTo(Category::class);
    }

}
