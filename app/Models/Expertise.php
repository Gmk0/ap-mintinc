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


class Expertise extends Model implements HasMedia
{
    use HasFactory;

    use InteractsWithMedia;


    use HasTranslations, HasTranslatableSlug;

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
        return SlugOptions::createWithLocales(['fr','en'])
            ->generateSlugsFrom(function($model,$locale){
                return "{$locale} {$model->title}";
            })
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
