<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;




Route::get('change-language/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'fr', 'pt'])) { // Liste des langues supportées
        session(['locale' => $locale]); // Stocke la langue dans la session
    }
    return redirect()->back(); // Redirige l'utilisateur à la page précédente
})->name('change.language');


Volt::route('/about', 'about')->name('about');
Volt::route('/contact', 'contact')->name('contact');

Volt::route('/projects/details', 'projects.detailproject')->name('project.detail');

Volt::route('/projects', 'project')->name('projet');

Volt::route('/property/details', 'property.detailproperty')->name('property.detailproperty');

Volt::route('/sell-property', 'property.sellproperty')->name('property.sellproperty');


Volt::route('/property', 'property.allproperty')->name('property.allproperty');




Route::get('/', \App\Livewire\Home\Landing::class)->name('home');




