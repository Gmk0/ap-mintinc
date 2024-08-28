<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Expertise extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'status',
        'icon',


    ];

    // Relation avec les traductions
    public function translations():MorphMany
    {
        return $this->morphMany(Translation::class, 'model');
    }


    public function getAllTranslations()
    {
        // Récupère les traductions associées à ce modèle
        $translations = $this->translations;

        // Regroupe les traductions par locale
        $groupedTranslations = $translations->groupBy('locale')->map(function ($items, $locale) {
            $result = [
                'locale' => $locale,
                'title' => '',
                'description' => ''
            ];

            foreach ($items as $item) {
                // Utilise le champ pour savoir quel type de traduction c'est
                if ($item->field === 'title') {
                    $result['title'] = $item->translation;
                } elseif ($item->field === 'description') {
                    $result['description'] = $item->translation;
                }
            }

            return $result;
        })->values()->toArray();

        return $groupedTranslations;
    }



    // Fonction pour récupérer une traduction spécifique
    public function getTranslation($field, $locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        $translation = $this->translations()
            ->where('field', $field)
            ->where('locale', $locale)
            ->first();

        return $translation ? $translation->translation : $this->$field;
    }

    // Fonction pour ajouter ou mettre à jour une traduction
    public function setTranslation($field, $locale, $value)
    {
        $translation = $this->translations()->updateOrCreate(
            ['field' => $field, 'locale' => $locale],
            ['translation' => $value]
        );

        return $translation;
    }

    public static function boot()
    {
        parent::boot();
        static::deleted(function($record){

            $record->translations()->delete();

        });

    }
}
