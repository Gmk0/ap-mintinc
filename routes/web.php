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
Volt::route('/contact', 'contact')->name('contact');

Volt::route('/projects/{slug}', 'projects.detailproject')->name('project.detail');

Volt::route('/projects', 'projects.allprojects')->name('project.allprojects');

Volt::route('/properties/{slug}/details', 'propertys.detailproperty')->name('property.detailproperty');



//Volt::route('/properties/category/{slug}','property.category')->name('property.category');

Volt::route('/sell-property', 'propertys.sellproperty')->name('property.sellproperty');
//Volt::route('/properties', 'propertys.allproperty')->name('property.allproperty');

Route::get('/properties/{category?}', \App\Livewire\Propertys\AllProperties::class)->name('property.allproperty');
Volt::route('/', 'home')->name('home');

Volt::route('/expertise/{slug}','expertise.oneexpertise')->name('expertise.oneexpertise');







