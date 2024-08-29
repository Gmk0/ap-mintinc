<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\{HasTranslations, HasTranslatableSlug};

class Expertise extends Model
{
    use HasFactory;

    use HasSlug;

    use HasTranslations;

    public $translatable = ['title','description', 'slug','content'];

    protected $fillable = [
        'title',
        'description',
        'status',
        'content',
        'icon',


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

   
    public static function boot()
    {
        parent::boot();
        static::deleted(function($record){

         //   $record->translations()->delete();

        });

    }
}
